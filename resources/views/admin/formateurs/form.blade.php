<div class="card-body bg-white">
    <div class="tab-content">
        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <input class="form-control" required id="noms" name="noms" type="text"
                        value="{{ isset($formateur->noms) ? $formateur->noms : old('noms') }}"
                        placeholder="Expert formateur" />
                    <label for="nom">{{ __('Nom complet') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('noms', '<p class="help-block">:message</p>') !!}</span>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="email" name="email" required type="email"
                        value="{{ isset($formateur->email) ? $formateur->email : old('email') }}"
                        placeholder="Dschang" />
                    <label for="ville">{{ __('email') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('email', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" name="sexe" required id="sexe"
                        aria-label="Selectionner le Sexe">
                        <option value="F"
                            {{ isset($formateur->sexe) && $formateur->sexe == 'F' ? 'selected' : '' }} selected>
                            {{ __('Feminin') }}</option>

                        <option value="M"
                            {{ isset($formateur->sexe) && $formateur->sexe == 'M' ? 'selected' : '' }}>
                            {{ __('Masculin') }}
                        </option>
                    </select>
                    <label for="statut">{{ __('Sexe') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('sexe', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="adresse" required name="adresse" type="adresse"
                        value="{{ isset($formateur->adresse) ? $formateur->adresse : old('adresse') }}"
                        placeholder="Dschang" />
                    <label for="ville">{{ __('Adresse') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('adresse', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
            </div>
            <div class="col">

                <div class="form-floating mb-3">
                    <input class="form-control" required id="tel1" name="tel1" type="tel" maxlength="9" minlength="9"
                        value="{{ isset($formateur->tel1) ? $formateur->tel1 : old('tel1') }}"
                        placeholder="(237) XXX XX XX XX" />
                    <label for="tel1">{{ __('Téléphone 1') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('tel1', '<p class="help-block">:message</p>') !!}</span>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="tel2" name="tel2" type="tel"
                        value="{{ isset($formateur->tel2) ? $formateur->tel2 : old('tel2') }}"
                        placeholder="(237) XXX XX XX XX" />
                    <label for="tel2">{{ __('Téléphone 2') }}</label>
                    <span style="color: red">{!! $errors->first('tel2', '<p class="help-block">:message</p>') !!}</span>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" accept=".jpeg,.png,.jpg,.pdf" id="photocopie_cni" name="photocopie_cni" type="file"
                        value="{{ isset($formateur->photocopie_cni) ? $formateur->photocopie_cni : old('photocopie_cni') }}"
                        placeholder="Douala" />
                    <label for="photocopie_cni">{{ __('Photocopie de la CNI') }}</label>
                    <span style="color: red">{!! $errors->first('photocopie_cni', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input accept=".jpeg,.png,.jpg,.pdf"  class="form-control" id="cv" name="cv" type="file"
                        value="{{ isset($formateur->cv) ? $formateur->cv : old('cv') }}"
                        placeholder="Bonanjo" />
                    <label for="cv">{{ __('CV du formateur') }}</label>
                    <span style="color: red">{!! $errors->first('cv', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>


            </div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" accept=".jpeg,.png,.jpg" id="avatar" name="avatar" type="file"
                 />
            <label for="avatar">{{ __('Photo de profile') }}</label>
            <span style="color: red">{!! $errors->first('avatar', '<p class="help-block">:message</p>')
                !!}</span>
        </div>

    </div>
</div>

