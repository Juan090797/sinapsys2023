<div  id="theModal" wire:ignore.self class="modal fade"  tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                @include('common.modalHead')
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" wire:model.defer="state.name" id="name" class="form-control">
                        </div>
                        @error('name') <span class="text-danger er">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <select wire:model.defer="state.estado" id="estado" class="form-control">
                                <option value="ELEGIR" selected>Seleccionar</option>
                                <option value="ACTIVO" >ACTIVO</option>
                                <option value="INACTIVO" >INACTIVO</option>
                            </select>
                        </div>
                        @error('estado') <span class="text-danger er">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="area">Area</label>
                            <input type="text" wire:model.defer="state.area" id="area" class="form-control">
                        </div>
                        @error('area') <span class="text-danger er">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="email" wire:model.defer="state.email" id="email" class="form-control">
                        </div>
                        @error('email') <span class="text-danger er">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="dni">DNI</label>
                            <input type="text" wire:model.defer="state.dni" id="dni" class="form-control">
                        </div>
                        @error('email') <span class="text-danger er">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="perfil">Perfil</label>
                            <select wire:model.defer="state.perfil" id="perfil" class="form-control">
                                <option value="" selected>Seleccionar</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->name}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('email') <span class="text-danger er">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            @include('common.modalFooter')
        </div>
    </div>
</div>
