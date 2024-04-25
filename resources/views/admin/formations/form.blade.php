<div class="card-body bg-white">
    <div class="tab-content">
                <div class="form-floating mb-3">
                    <input class="form-control" required id="nom" name="nom" type="text"
                        value="{{ isset($formation->nom) ? $formation->nom : old('nom') }}"
                        placeholder="Expert formation" />
                    <label for="nom">{{ __('Nom de la formation') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('nom', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input accept=".jpeg,.png,.jpg" class="form-control" id="photo" name="photo" type="file"
                        value="{{ isset($formation->photo) ? $formation->photo : old('photo') }}"
                        placeholder="(237) XXX XX XX XX" />
                    <label for="photo">Photo descriptive<span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('photo', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="duree" name="duree" required type="duree"
                        value="{{ isset($formation->duree) ? $formation->duree : old('duree') }}"
                        placeholder="Dschang" />
                    <label for="ville">{{ __('Duree de la formation') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('duree', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="prix" required name="prix" type="prix"
                        value="{{ isset($formation->prix) ? $formation->prix : old('prix') }}"
                        placeholder="Dschang" />
                    <label for="ville">{{ __('Prix de la formation') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('prix', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <select name="user_id" id="user_id js-example-basic-single" class="form-select">
                        <option value="" disabled selected>Choisir le formation responsable</option>
                        @foreach($users as $item)
                        <option value="{{$item->id}}" @if( isset($formation) && $item->id == $formation->user_id) selected @endif>
                            {{$item->noms}}
                        </option>
                        @endforeach
                    </select>
                    <label for="user_id" class="control-label">{{ 'Formateur responsable' }}</label>
                    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
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

