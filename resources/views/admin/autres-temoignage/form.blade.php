<div class="card-body bg-white">
    <div class="tab-content">
                <div class="form-floating mb-3">
                    <input class="form-control" required id="nom" name="nom" type="text"
                        value="{{ isset($temoignage->nom) ? $temoignage->nom : old('nom') }}"
                        placeholder="Expert temoignage" />
                    <label for="nom">{{ __('Nom complet') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('nom', '<p class="help-block">:message</p>') !!}</span>
                </div>
                 <div class="form-floating mb-3">
                    <input accept=".jpeg,.png,.jpg" class="form-control" id="photo" name="photo" type="file"
                        value="{{ isset($temoignage->photo) ? $temoignage->photo : old('photo') }}"
                        placeholder="(237) XXX XX XX XX" />
                    <label for="photo">Photo de l'etudiant<span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('photo', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" required id="fonction" name="fonction" type="text"
                        value="{{ isset($temoignage->fonction) ? $temoignage->fonction : old('fonction') }}"
                        placeholder="Expert temoignage" />
                    <label for="fonction">{{ __('Fonction du temoin') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('fonction', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="description" name="description">{{ isset($temoignage->description) ? $temoignage->description : old('description') }}</textarea>
                    <label for="description">{{ __('Contenu') }}</label>
                    <span style="color: red">{!! $errors->first('description', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>

    </div>
</div>

