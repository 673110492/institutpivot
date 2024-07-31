<div class="card-body bg-white">
    <div class="tab-content">
                <div class="form-floating mb-3">
                    <input class="form-control" required id="nom" name="nom" type="text"
                        value="{{ isset($type_formation->nom) ? $type_formation->nom : old('nom') }}"
                        placeholder="Expert type_formation" />
                    <label for="nom">{{ __('Nom du type') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('nom', '<p class="help-block">:message</p>') !!}</span>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="duree" name="duree" required type="duree"
                        value="{{ isset($type_formation->duree) ? $type_formation->duree : old('duree') }}"
                        placeholder="Dschang" />
                    <label for="ville">{{ __('Duree minimale de la formation') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('duree', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>

                <div class="mb-3">
                    <label for="ville">{{ __('Description de la formation') }} <span style="color:red">*</span></label>
                    <textarea class="form-control" rows="10" required name="description" type="description" value="">{{ isset($type_formation->description) ? $type_formation->description : old('description') }}</textarea>
                    <span style="color: red">{!! $errors->first('description', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
</div>
</div>

