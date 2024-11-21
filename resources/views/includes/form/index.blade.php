
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item w-50 rounded-top-lg" role="presentation">
        <button class="nav-link active w-100 text-muted p-4" id="quote-tab" data-bs-toggle="tab" style="border-top-left-radius:30px;border-top-right-radius:30px; border:none; background-color: transparent;"
            data-bs-target="#quote" type="button" role="tab" aria-controls="quote" aria-selected="true">
                <strong class="text-body">{{ $main_screen[0]['quote-form-tab-title-1'] }}</strong>
        </button>
    </li>
    <li class="nav-item w-50 rounded-top-lg " role="presentation">
        <button class="nav-link w-100 text-muted p-4" id="contact-tab" data-bs-toggle="tab" style="background-color: transparent;border:none;border-top-left-radius:35px;border-top-right-radius:35px;"
            data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
            <strong class="text-body">{{ $main_screen[0]['quote-form-tab-title-2'] }}</strong>
        </button>
    </li>
</ul>
<div class="tab-content p-2 bg-white" style="border-radius:30px;">                            
    <div class="tab-pane fade show active" id="quote" role="tabpanel" aria-labelledby="quote-tab">
        <div class="container bg-white">
            <form method="POST" action="{{ route('FrontPage.QuoteForm') }}">
                @csrf
                @method('post')
                <div class="row text-center" style="border-radius:50%;">                                        
                    <div class="col mt-3 border" style="margin-left:30px;margin-right:15px;" id="home">
                        <i class="fa fa-home mt-3" aria-hidden="true" style="font-size:4rem;"></i>  
                        <p>Casa</p>                                          
                    </div>
                    <div class="col border mt-3" style="margin-right:30px;margin-left:15px;" id="company">
                        <i class="far fa-building mt-3" aria-hidden="true" style="font-size:4rem;"></i>  
                        <p>Empresa</p>
                    </div>
                    <input class="input-field rounded" type="hidden" name="customer_type" id="customer_type" value="home" required>
                    
                    <div class="input-container mt-3" style="width: 92%;" required>
                        <select name="products">
                            <option value="ratos" selected class="text-white">Ratos</option>
                            <option value="baratas" class="text-muted">Baratas</option>
                            <option value="percevejos" class="text-muted">Percevejos</option>
                        </select>
                    </div>

                    <div class="input-container mt-3" style="width: 92%;">
                        <i class="far fa-smile icon"></i>
                        <input class="input-field rounded" type="text" placeholder="Localidade" name="locality" required>
                        @error('locality')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-container mt-1" style="width: 92%;">
                        <i class="far fa-smile icon"></i>
                        <input class="input-field rounded" type="text" placeholder="Nome" name="name" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-container" style="width: 92%;">
                        <i class="far fa-envelope icon"></i>
                        <input class="input-field rounded" type="email" placeholder="Email" name="email" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-container" style="width: 92%;">
                        <i class="fa fa-phone icon"></i>
                        <input class="input-field rounded" type="number" placeholder="Telefone" name="phone">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12 form-check">
                        <input class="form-check-input form-check-input float-left" type="checkbox" name="confirmed" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">
                        Concordo com os termos de utilizaçao
                        </label>
                        @error('confirmed')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12 ml-4 mb-5" style="max-width: 92%">
                        <button class="btn btn-dark mt-2" type="submit" name="quote_form">Obter Orçamento Grátis</button>
                    </div>
                </div>
            </form>    
        </div>                                     
    </div>
    <div class="tab-pane fade p-2  quote_border_inbox" id="contact" role="tabpanel" aria-labelledby="contact-tab" >
        <div class="tab-pane fade show active quote_border_inbox" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
                <form method="post" action="{{ route('FrontPage.ContactForm') }}">
                    @csrf
                    @method('POST')
                    <div class="row text-center">                                                
                        <h2 class="h2 mt-5">{{ $main_screen[0]['quote-form-tab-2-h2'] }}</h2>
                        <p class="mb-5">{{ $main_screen[0]['quote-form-tab-2-p'] }}</p>
                        <div class="input-container mt-3" style="width: 92%;">
                            <i class="far fa-smile icon"></i>
                            <input class="input-field rounded" type="text" placeholder="name" name="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-container" style="width: 92%;">
                            <i class="far fa-envelope icon"></i>
                            <input class="input-field rounded" type="email" placeholder="email" name="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-container" style="width: 92%;">
                            <i class="fa fa-phone icon"></i>
                            <input class="input-field rounded" type="text" placeholder="Telefone" name="usrnm">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-check">
                            <input class="form-check-input form-check-input float-left" type="checkbox" name="confirmed" id="flexCheckDefault" required>
                            <label class="form-check-label" for="flexCheckDefault">
                            Concordo com os termos de utilizaçao
                            </label>
                            @error('confirmed')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 ml-4" style="max-width: 92%;">
                            <button class="btn btn-dark w-100 mt-2" type="submit" name="form_contact">Contact-nos</button>
                        </div>                                            
                    </div>
                </form>
            </div>                                     
        </div>   
    </div>
</div>  
