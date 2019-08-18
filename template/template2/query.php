<?php
include("inc/connect.php");

$url_id = $_REQUEST['id'];

$sql3 = "SELECT * FROM branches where id=2 ";
function graphql_query(string $endpoint, string $query, array $variables = [], string $token = null)
{
    $headers = ['Content-Type: application/json', 'User-Agent: DEEPVISION'];
    if (null !== $token) {
        $headers[] = "Authorization: bearer $token";
    }
    if (false === $data = @file_get_contents($endpoint, false, stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => $headers,
                'content' => json_encode(['query' => $query, 'variables' => $variables, 'operationName' => 'getFoodList']),
            ]
        ]))) {
        $error = error_get_last();
        throw new \ErrorException($error['message'], $error['type']);
    }

    echo $data;
}

$result = $con->query($sql3);
$row = $result->fetch_array(MYSQLI_ASSOC);
$urldwz = $row['doveze_url'];
$hostUrl = "$urldwz";
$token = "eyJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxLCJhdXRoZW50aWNhdGlvbl90b2tlbiI6bnVsbCwiaWF0IjoxMTg0NDk5NTUsImp0aSI6ImRiNGE2NzkxMTQzY2I0MGRjNGJlMDJlMTdjZDA1ZGI0In0.VFXP-rgIh0uYvbxguPVSz0c4JOOs7jpoYqJedT5uAcY";
$endpoint = "https://c2e-p1.deep-vision.cloud/graphql";

$query = <<<'GRAPHQL'
query getFoodList($hostUrl: String){
  companyBranchLookUp(hostUrl: $hostUrl) {
    isBrandWac
    companyBranch {
      name
      wareCategories {         
        wareCategoryType {enum}
        nameLabel
        recipes {
          nameLabel
          descriptionLabel
          ingredients {
            recipe {
              nameLabel
            }
          }
          prices {
            warePriceType {
              code
            }
            price {
              formattedValue
            }
          }
        }
      }
    }
  }
}

GRAPHQL;

graphql_query($endpoint, $query, ['hostUrl' => $hostUrl], $token);

