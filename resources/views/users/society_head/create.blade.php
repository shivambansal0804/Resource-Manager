@extends('layouts.app') 
@section('content')
<section id="start" class="cover cover-fullscreen height-100 cover cover-features imagebg space--lg" data-overlay="2">
    <div class="background-image-holder">
        <img alt="background" src="{{ asset('img/back.jpg')}}" />
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-8">
                <h1>
                    Welcome To Your Society Page
                </h1>
                <p class="lead">
                    Follow instructions for sexsexful creation of your society page. (add code of conduct)
                </p>
                <a class="btn btn--primary type--uppercase inner-link" href="#instructions" data-scroll>
                    <span class="btn__text">
                        view Instructions
                    </span>
                </a>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
<section id="instructions">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wizard">
                    <h5>Intro</h5>
                    <section class="text-center">
                        <div class="pos-vertical-center">
                            <h4>Basic info</h4>
                        </div>
                    </section>
                    <h5>Images</h5>
                    <section class="text-center">
                        <div class="pos-vertical-center">
                            <h4>Uploading Images</h4>
                        </div>
                    </section>
                    <h5>Finish</h5>
                    <section class="text-center">
                        <div class="pos-vertical-center">
                            <h4>Things can do after finishing</h4>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
    </section>

<section class="cover bg--secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <form action="{{ route('society.head.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf 

                    <h3><strong>Primary info</strong></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name" class="validate-required" value="{{ old('name') ? old('name') : '' }}" required />
                        </div>

                        <div class="col-md-12">
                            <label for="">Category</label>
                            <br>
                            <div class="input-radio input-radio--innerlabel">
                                <input id="tech" type="radio" name="category" value="tech" />
                                <label for="tech">Technical</label>
                            </div>

                            <div class="input-radio input-radio--innerlabel">
                                <input id="team" type="radio" name="category" value="team" />
                                <label for="team">Tech Team</label>
                            </div>

                            <div class="input-radio input-radio--innerlabel">
                                <input id="cultural" type="radio" name="category" value="cultural" />
                                <label for="cultural">Cultural</label>
                            </div>

                            <div class="input-radio input-radio--innerlabel">
                                <input id="misc" type="radio" name="category" value="misc" />
                                <label for="misc">Misc.</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label>Head Incharge</label>
                            <input type="text" name="head_incharge" placeholder="Name of the society head" class="validate-required" value="{{ old('head_incharge') ? old('head_incharge') : '' }}" />
                        </div>

                        <div class="col-md-12">
                            <label>Society Incharge's Contact no.</label>
                            <input type="text" name="head_contact_number" placeholder="Contact no of the society head" class="validate-required" value="{{ old('head_contact_number') ? old('head_contact_number') : '' }}" />
                        </div>

                        <div class="col-md-12">
                            <label>PR Incharge</label>
                            <input type="text" name="pr_incharge" placeholder="Name of the society's PR Incharge" class="validate-required" value="{{ old('pr_incharge') ? old('pr_incharge') : '' }}" />
                        </div>

                        <div class="col-md-12">
                            <label>PR Incharge's Contact no.</label>
                            <input type="text" name="pr_contact_number" placeholder="Contact no of the society's PR Incharge" class="validate-required" value="{{ old('pr_contact_number') ? old('pr_contact_number') : '' }}" />
                        </div>

                        <div class="col-md-12">
                            <label>Link to Website</label>
                            <input type="text" name="website" placeholder="Link to society's website (eg. Like www.dtutimes.dtu.ac.in)" class="validate-required" value="{{ old('website') ? old('website') : '' }}" />
                        </div>                        

                        <div class="col-md-12">
                            <label>Description:</label>
                            <textarea name="description" placeholder="About your scoiety" class="validate-required" rows="4" required>{{ old('description') ? old('description') : '' }}</textarea>
                        </div>
                    </div>

                    <br>
                    <h3><strong>Social info</strong></h3>
                    <div class="row">
                        <div class="col-md-2 text-center pt-2">
                            <i class="socicon socicon-linkedin icon icon--xs"></i>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="validate-required" name="linkedin" value="{{ old('linkedin') ? old('linkedin') : '' }}">
                        </div>

                        <div class="col-md-2 text-center pt-2">
                            <i class="socicon socicon-facebook icon icon--xs"></i>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="validate-required" name="facebook" value="{{ old('facebook') ? old('facebook') : '' }}">
                        </div>

                        <div class="col-md-2 text-center pt-2">
                            <i class="socicon socicon-instagram icon icon--xs"></i>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="validate-required" name="instagram" value="{{ old('instagram') ? old('instagram') : '' }}">
                        </div>

                        <div class="col-md-2 text-center pt-2">
                            <i class="socicon socicon-medium icon icon--xs"></i>
                        </div>

                        <div class="col-md-10">
                            <input type="text" class="validate-required" name="contact_mail" value="{{ old('contact_mail') ? old('contact_mail') : '' }}"
                                required />
                                <span><small>This will be your society's public email.</small></span>
                        </div>
                    </div>

                    <br>
                    <h3><strong>Social Logo</strong></h3>
                    <div class="row">
                        <div class="col-md-10">
                            <input type="file" class="validate-required" name="logo" value="{{ old('logo') ? old('logo') : '' }}">
                        </div>
                    </div>

                    <hr>
                    <div class="col-md-4 ">
                        <button type="submit" class="btn btn--primary">Update your info</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end of container-->
</section>

@endsection