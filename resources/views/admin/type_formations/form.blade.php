<div class="card-body bg-white">
    <div class="tab-content">
                <div class="form-floating mb-3">
                    <input class="form-control" required id="nom" name="nom" type="text"
                        value="{{ isset($formation->nom) ? $formation->nom : old('nom') }}"
                        placeholder="Expert formation" />
                    <label for="nom">{{ __('Nom du type') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('nom', '<p class="help-block">:message</p>') !!}</span>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="duree" name="duree" required type="duree"
                        value="{{ isset($formation->duree) ? $formation->duree : old('duree') }}"
                        placeholder="Dschang" />
                    <label for="ville">{{ __('Duree de la formation') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('duree', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>

                <div class="mb-3">
                    <label for="ville">{{ __('Description de la formation') }} <span style="color:red">*</span></label>
                    <textarea class="form-control" required name="description" type="description" value=""
                        placeholder="Dschang">{{ isset($formation->description) ? $formation->description : old('description') }}</textarea>
                    <span style="color: red">{!! $errors->first('description', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
</div>
</div>

