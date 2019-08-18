

CREATE TABLE `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doveze_url` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `hnadpis` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `hpodnadpis` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `onas` longtext COLLATE utf8mb4_czech_ci NOT NULL,
  `logoname` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `logo` blob NOT NULL,
  `gmap` longtext COLLATE utf8mb4_czech_ci NOT NULL,
  `social_fb` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `social_inst` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `kont_misto` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `kont_cislo` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `kont_email` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `open_po` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `close_po` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `open_ut` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `close_ut` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `open_st` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `close_st` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `open_ct` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `close_ct` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `open_pa` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `close_pa` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `open_so` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `close_so` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `open_ne` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `close_ne` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `footer` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

INSERT INTO `branches` VALUES("1","dwdw","wdwd","wdwd","dwdwd","Tomas","Piza testwdwd","Piza test","<p>wdwdw</p>","viber.svg","image/svg+xml","<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
	 viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
<path style=\"fill:#665CAC;\" d=\"M307.207,0H204.794C105.969,0,25.571,80.398,25.571,179.223v76.81
	c0,69.381,40.014,132.344,102.413,161.961v85.537c0,7.427,9.291,11.31,14.569,6.035l74.309-74.31h90.344
	c98.824,0,179.223-80.398,179.223-179.223v-76.81C486.429,80.398,406.03,0,307.207,0z\"/>
<path style=\"fill:#523494;\" d=\"M153.587,417.993c-62.399-29.618-102.413-92.58-102.413-161.961v-76.81
	C51.174,80.398,131.573,0,230.397,0h-25.603C105.969,0,25.571,80.398,25.571,179.223v76.81c0,69.381,40.014,132.344,102.413,161.961
	v85.537c0,7.427,9.291,11.31,14.569,6.035l11.034-11.034V417.993z\"/>
<path style=\"fill:#FFFFFF;\" d=\"M384.85,318.101l-7.673-41.566c-0.635-3.434-3.295-6.135-6.719-6.82l-60.347-12.069
	c-2.803-0.558-5.691,0.317-7.71,2.334l-24.517,24.518c-41.308-18.509-64.234-41.485-84.406-84.566l24.438-24.437
	c2.017-2.018,2.893-4.912,2.334-7.71l-12.069-60.348c-0.685-3.423-3.386-6.085-6.82-6.719l-41.566-7.672
	c-1.138-0.209-2.31-0.187-3.44,0.07c-10.975,2.493-20.989,8.023-28.96,15.996c-13.802,13.802-19.077,33.942-15.253,58.243
	c6.419,40.806,26.411,97.594,63.296,134.627l0.504,0.5c37.004,36.859,93.793,56.853,134.601,63.273
	c5.141,0.81,10.092,1.211,14.84,1.211c17.695,0,32.52-5.582,43.405-16.465c7.971-7.972,13.503-17.986,15.995-28.959
	C385.036,320.411,385.06,319.241,384.85,318.101z\"/>
<g>
	<polygon style=\"fill:#E5E5E5;\" points=\"209.571,183.839 217.915,175.494 217.924,175.485 209.57,183.838 	\"/>
	
		<rect x=\"292.235\" y=\"264.183\" transform=\"matrix(0.7071 -0.7071 0.7071 0.7071 -99.4675 288.2322)\" style=\"fill:#E5E5E5;\" width=\"11.916\" height=\"0.002\"/>
	<path style=\"fill:#E5E5E5;\" d=\"M341.473,350.871c-4.748,0-9.699-0.401-14.84-1.211c-40.807-6.42-97.596-26.414-134.601-63.273
		l-0.504-0.5c-36.885-37.033-56.877-93.821-63.296-134.627c-3.089-19.633-0.233-36.548,8.256-49.601
		c-3.251,2.169-6.302,4.657-9.097,7.452c-13.802,13.802-19.077,33.942-15.253,58.243c6.419,40.806,26.411,97.594,63.296,134.627
		l0.504,0.5c37.004,36.859,93.793,56.853,134.601,63.273c5.141,0.81,10.092,1.211,14.84,1.211c17.695,0,32.52-5.581,43.405-16.465
		c2.794-2.795,5.282-5.845,7.451-9.096C366.598,347.672,354.858,350.871,341.473,350.871z\"/>
</g>
<g>
	<path style=\"fill:#FFFFFF;\" d=\"M273.069,145.085c-4.713,0-8.534,3.821-8.534,8.534s3.821,8.534,8.534,8.534
		c18.824,0,34.138,15.314,34.138,34.138c0,4.65,3.884,8.534,8.534,8.534s8.534-3.884,8.534-8.534
		C324.276,168.055,301.305,145.085,273.069,145.085z\"/>
	<path style=\"fill:#FFFFFF;\" d=\"M273.069,110.947c-3.157,0-6.343,0.175-9.471,0.52c-4.685,0.517-8.064,4.734-7.547,9.42
		s4.743,8.056,9.42,7.547c2.508-0.277,5.064-0.418,7.598-0.418c37.647,0,68.275,30.628,68.275,68.275
		c0,2.535-0.141,5.091-0.418,7.599c-0.51,4.621,2.924,8.911,7.547,9.42c4.622,0.509,8.909-2.924,9.42-7.547
		c0.345-3.128,0.52-6.314,0.52-9.472C358.413,149.233,320.128,110.947,273.069,110.947z\"/>
	<path style=\"fill:#FFFFFF;\" d=\"M273.069,76.81c-3.05,0-6.139,0.116-9.179,0.347c-4.7,0.356-8.222,4.456-7.866,9.155
		c0.355,4.7,4.469,8.222,9.155,7.866c2.613-0.199,5.268-0.299,7.89-0.299c56.471,0,102.413,45.942,102.413,102.413
		c0,7.99-0.922,15.944-2.74,23.64c-1.043,4.41,1.673,8.994,6.046,10.192c4.601,1.26,9.469-1.625,10.565-6.266
		c2.122-8.981,3.198-18.255,3.198-27.566C392.551,130.409,338.952,76.81,273.069,76.81z\"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
","Hlavacova 207, Pardubice","https://www.facebook.com/PizzaDelicato/?fref=ts","https://www.instagram.com","Pardubice 53302, Afi palace","+420 723194310","test@test.gmail.com","10:00","22:00","10:00","22:00","10:00","22:00","10:00","22:00","10:00","22:00","09:00","23:00","09:00","23:00","DEEP VISION");



