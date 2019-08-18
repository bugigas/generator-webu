<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Vytvoření šablony</h6>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="py-2">
                        <form id="myFormTemp" enctype="multipart/form-data" novalidate>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="file">Logo obrázek - max 16Mb.</label>
                                    <input type="file" class="form-control" name="file" id="file" required/>
                                    <img id="imgPreview" style="max-width:250px;"
                                         src="assets/no-preview-available.png"
                                         alt="obrázek k náhledu" draggable="false">

                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="doveze_url">Doveze URL</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"
                                                          id="inputGroupPrepend">www.</span>
                                                </div>
                                                <input type="text" class="form-control" name="doveze_url"
                                                       id="doveze_url" required/>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row">

                                        <div class="col-md-6 mb-3">
                                            <label for="title">Meta tag title / Název</label>
                                            <input type="text" class="form-control" name="title" id="title" required/>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="autor">Meta tag Autor</label>
                                            <input type="text" class="form-control" name="autor" id="autor"
                                                   value="Tomas"
                                                   required/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="description">Meta tag description</label>
                                    <input type="text" class="form-control" name="description" id="description"
                                           required/>
                                    <small id="description" class="form-text text-muted">Meta tag description slouží k
                                        popisu vaší stránky.</small>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="keywords">Meta tag keywords</label>
                                    <textarea class="form-control" name="keywords" id="keywords" rows="1"
                                              required></textarea>
                                    <small id="keywords" class="form-text text-muted">Meta tag keywords - v pár slovech
                                        uveďte kličové slova o vaší
                                        stránce.</small>

                                </div>
                            </div>
                            <div class="form-row">

                                <div class="col-md-6 mb-3">
                                    <label for="hnadpis">Nadpis hlavička</label>
                                    <input type="text" class="form-control" name="hnadpis" id="hnadpis"
                                           value="Piza test" required/>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="hpodnadpis">Podnadpis hlavička</label>
                                    <input type="text" class="form-control" name="hpodnadpis" id="hpodnadpis"
                                           value="Piza test" required/>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="onas">O nás - text</label>
                                    <textarea class="form-control" name="onas" id="onas" rows="2" required></textarea>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="social_fb">Facebook adresa</label>
                                    <input type="text" class="form-control" name="social_fb" id="social_fb"
                                           value="https://www.facebook.com/PizzaDelicato/?fref=ts"/>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="social_inst">Instagram adresa</label>
                                    <input type="text" class="form-control" name="social_inst" id="social_inst"
                                           value="https://www.instagram.com"/>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="gmap">Google mapa</label>
                                    <input type="text" class="form-control" name="gmap" id="gmap"
                                           value="Hlavacova 207, Pardubice" required/>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="kont_misto">Kontakt místo</label>
                                    <input type="text" class="form-control" name="kont_misto" id="kont_misto"
                                           value="Pardubice 53302, Afi palace" required/>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="kont_cislo">Tel.číslo</label>
                                    <input type="text" class="form-control" name="kont_cislo" id="kont_cislo"
                                           value="+420 723194310" required/>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="kont_email">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        </div>
                                        <input type="email" class="form-control" name="kont_email" id="kont_email"
                                               value="test@test.gmail.com" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="open_po">Pondělí od:</label>
                                    <input type="time" class="form-control" name="open_po" id="open_po" value="10:00"/>
                                </div>
                                <div class="col-md-3 mb-3">

                                    <label for="close_po">Do:</label>
                                    <input type="time" class="form-control" name="close_po" id="close_po" value="22:00">

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="open_ut">Úterý od:</label>

                                    <input type="time" class="form-control" name="open_ut" id="open_ut" value="10:00"/>


                                </div>
                                <div class="col-md-3 mb-3">

                                    <label for="close_ut">Do:</label>
                                    <input type="time" class="form-control" name="close_ut" id="close_ut" value="22:00">

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="open_st">Středa od:</label>

                                    <input type="time" class="form-control" name="open_st" id="open_st" value="10:00"/>


                                </div>
                                <div class="col-md-3 mb-3">

                                    <label for="close_st">Do:</label>
                                    <input type="time" class="form-control" name="close_st" id="close_st" value="22:00">

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="open_ct">Čtvrtek od:</label>

                                    <input type="time" class="form-control" name="open_ct" id="open_ct" value="10:00"/>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="close_ct">Do:</label>
                                    <input type="time" class="form-control" name="close_ct" id="close_ct" value="22:00">

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="open_pa">Pátek od:</label>

                                    <input type="time" class="form-control" name="open_pa" id="open_pa" value="10:00"/>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="close_pa">Do:</label>
                                    <input type="time" class="form-control" name="close_pa" id="close_pa" value="22:00">

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="open_so">Sobota od:</label>

                                    <input type="time" class="form-control" name="open_so" id="open_so" value="09:00"/>


                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="close_so">Do:</label>
                                    <input type="time" class="form-control" name="close_so" id="close_so" value="23:00">

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="open_ne">Neděle od:</label>

                                    <input type="time" class="form-control" name="open_ne" id="open_ne" value="09:00"/>


                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="close_ne">Do:</label>
                                    <input type="time" class="form-control" name="close_ne" id="close_ne" value="23:00">

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="footer">Footer</label>
                                    <input type="text" class="form-control" name="footer" id="footer"
                                           value="DEEP VISION"
                                           required/>
                                </div>
                            </div>
                            <input type="hidden" name="addTemp" value="data1" id="addTemp">
                            <!-- ajax hidden for post isset -->
                            <input type="submit" class="btn btn-primary" name="formSubmit" id="formSubmit"
                                   value="Uložit template do db"/>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>