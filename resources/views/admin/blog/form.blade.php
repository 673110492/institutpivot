<div class="card-body bg-white">
    <div class="tab-content">
                <div class="form-floating mb-3">
                    <input accept=".jpeg,.png,.jpg" class="form-control" id="photo" name="photo" type="file"
                        value="{{ isset($actualite->photo) ? $actualite->photo : old('photo') }}"
                        placeholder="(237) XXX XX XX XX" />
                    <label for="photo">Photo descriptive<span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('photo', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" required id="titre" name="titre" type="text"
                        value="{{ isset($actualite->titre) ? $actualite->titre : old('titre') }}"
                        placeholder="Expert actualite" />
                    <label for="titre">Titre de l'actualité<span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('titre', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" required id="auteur" name="auteur" type="text"
                        value="{{ isset($actualite->auteur) ? $actualite->auteur : old('auteur') }}"
                        placeholder="Expert actualite" />
                    <label for="auteur">Auteur de l'actualité<span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('auteur', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="mb-3">
                    <label for="ville">{{ __('Contenu') }} <span style="color:red">*</span></label>
                    <textarea class="form-control" id="div_editor1" required name="message" type="message" value=""
                        placeholder="Dschang">{{ isset($actualite->message) ? $actualite->message : old('message') }}</textarea>
                    <span style="color: red">{!! $errors->first('message', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
    </div>
</div>

