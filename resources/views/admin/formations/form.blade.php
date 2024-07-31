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
                <div class="mb-3">
                    <label for="ville">{{ __('Description de la formation') }} <span style="color:red">*</span></label>
                    <textarea class="form-control" rows="10" required name="description" type="description" value="">{{ isset($formation->description) ? $formation->description : old('description') }}</textarea>
                    <span style="color: red">{!! $errors->first('description', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
            <div class="row">
                <div class="form-floating mb-3 col-md-4">
                    <select onchange="duree_change()" name="type_formation_id" id="type_formation_id" class="form-select">
                        <option value="" disabled selected>Choisir le type de formation</option>
                        @foreach($type_formations as $item)
                        <option value="{{$item->id}}" @if( isset($formation) && $item->id == $formation->type_formation_id) selected @endif>
                            {{$item->nom}}
                        </option>
                        @endforeach
                    </select>
                    <label for="type_formation_id" class="control-label">{{ 'Type de formation' }}<span style="color:red">*</span></label>
                    {!! $errors->first('type_formation_id', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-floating mb-3 col-md-3">
                    <input class="form-control" id="duree" name="duree" required type="duree" />
                    <label for="ville">{{ __('Duree minimale') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('duree', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
                <div class="form-floating mb-3 col-md-3">
                    <input class="form-control" id="prix" required name="prix" type="number"/>
                    <label for="ville">{{ __('Prix en fonction du type') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('prix', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
                <div class=" col-md-2 end">
                    <label for="">Ajouter</label><br>
                    <p class="btn btn-success" onclick="soumettre()">ok</p>
                </div>
            </div>
            <table class="data-table table stripe hover nowrap mt-5">
            <thead>
                <tr>
                    <th><b>Type formation</b></th>
                    <th><b>prix</b></th>
                    <th><b>Duree</b></th>
                    <th><b>Action</b></th>
                </tr>
            </thead>
            <tbody id="tet">

            </tbody>
        </table>
</div>
</div>

