 <div class="row">                    
                            
                        <div class="col-6">
                        <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nombres" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>    
                        </div>
                        <div class="row">                    
                            
                            <div class="col-6">
                        <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Apellido" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>