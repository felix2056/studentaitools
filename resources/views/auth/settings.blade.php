@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            @include('includes.sidebar', ['class' => 'col-xl-3 col-lg-4'])

            <div class="col-xl-9 col-lg-8 cus-mar setting-row">
                <div class="head-area mb-6 text-start">
                    <h5>Settings</h5>
                </div>
                <div class="single-box p-sm-5 p-3">
                    <div class="row gap-6">
                        <div class="col-xxl-2 col-md-3 col-sm-5 col-6 pe-0">
                            <div class="upload-single">
                                <div class="head-area mb-2 text-start">
                                    <h6>Profile Image</h6>
                                </div>
                                <div class="profile-picture text-start">
                                    <img class="preview-image w-100" src="{{ $user->avatar }}" alt="Preview Image">
                                </div>
                                <div class="file-upload">
                                    <label class="file text-start mt-2">
                                        <input type="file" name="avatar">
                                        <span class="cmn-btn">Change Profile</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="upload-single cover-img">
                                <div class="head-area mb-2 text-start">
                                    <h6>Cover Image</h6>
                                </div>
                                <div class="profile-picture text-start">
                                    <img class="preview-cover w-100" src="{{ $user->cover }}" alt="Preview Image" width="926" height="250">
                                </div>
                                <div class="file-upload">
                                    <label class="file text-start mt-2">
                                        <input type="file" name="cover">
                                        <span class="cmn-btn">Change Cover photo</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-box text-start p-sm-5 p-3">
                    <div class="head-area mb-6">
                        <h6>General Information </h6>
                    </div>
                    <form method="POST" class="text-center d-grid gap-4" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-input text-start">
                                    <label for="first_name">First Name</label>
                                    <div class="input-area second @error('first_name') is-invalid @enderror">
                                        <input type="text" name="first_name" value="{{ $user->first_name }}" placeholder="Type first name" autocomplete="off" required class="@error('first_name') is-invalid @enderror">
                                    </div>
                                    @error('first_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-input text-start">
                                    <label for="last_name">Last Name</label>
                                    <div class="input-area second @error('last_name') is-invalid @enderror">
                                        <input type="text" name="last_name" value="{{ $user->last_name }}" placeholder="Type last name" autocomplete="off" required class="@error('last_name') is-invalid @enderror">
                                    </div>
                                    @error('last_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-input text-start">
                                    <label for="email">Email</label>
                                    <div class="input-area second @error('email') is-invalid @enderror">
                                        <input type="text" name="email" value="{{ $user->email }}" placeholder="Email" autocomplete="off" readonly required class="@error('email') is-invalid @enderror">
                                    </div>
                                    <small class="text-muted">Email must be verified.</small>
                                    @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-input text-start">
                                    <label for="username">Username</label>
                                    <div class="input-area second @error('username') is-invalid @enderror">
                                        <input type="text" name="username" value="{{ $user->username }}" placeholder="Type username" autocomplete="off" required class="@error('username') is-invalid @enderror">
                                    </div>
                                    <small class="text-muted">Username must be unique.</small>
                                    @error('username')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-input text-start">
                                    <label for="gender">Gender</label>
                                    <div class="@if ($user->gender != 'male' && $user->gender != 'female' && $user->gender != NULL) input-area @else select-area @endif second @error('gender') is-invalid @enderror">
                                        <select name="gender" required class="@error('gender') is-invalid @enderror">
                                            <option value="male" @if ($user->gender == 'male') selected @endif> Male</option>
                                            <option value="female" @if ($user->gender == 'female') selected @endif>Female</option>
                                            <option value="other" @if ($user->gender != 'male' && $user->gender != 'female' && $user->gender != NULL) selected @endif>Other</option>
                                        </select>
                                        <input type="text" name="other_gender" class="@if ($user->gender == 'male' || $user->gender == 'female' || empty($user->gender)) d-none @endif other_gender" value="{{ $user->gender }}" placeholder="Type your gender" autocomplete="off">
                                    </div>
                                    @error('gender')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-input text-start">
                                    <label for="preferred_pronouns">Preferred Pronouns</label>
                                    <div class="@if ($user->preferred_pronouns != 'he_him' && $user->preferred_pronouns != 'she_her' && $user->preferred_pronouns != 'they_them' && $user->preferred_pronouns != NULL) input-area @else select-area @endif second @error('preferred_pronouns') is-invalid @enderror">
                                        <select name="preferred_pronouns" required class="@error('preferred_pronouns') is-invalid @enderror">
                                            <option value="he/him" @if ($user->preferred_pronouns == 'he_him') selected @endif>He/Him</option>
                                            <option value="she/her" @if ($user->preferred_pronouns == 'she_her') selected @endif>She/Her</option>
                                            <option value="they/them" @if ($user->preferred_pronouns == 'they_them') selected @endif>They/Them</option>
                                            <option value="other" @if ($user->preferred_pronouns != 'he_him' && $user->preferred_pronouns != 'she_her' && $user->preferred_pronouns != 'they_them' && $user->preferred_pronouns != NULL) selected @endif>Other</option>
                                        </select>
                                        <input type="text" name="other_pronouns" class="@if ($user->preferred_pronouns == 'he_him' || $user->preferred_pronouns == 'she_her' || $user->preferred_pronouns == 'they_them' || empty($user->preferred_pronouns)) d-none @endif other_pronouns" value="{{ $user->preferred_pronouns }}" placeholder="Type your pronouns" autocomplete="off">
                                    </div>
                                    @error('preferred_pronouns')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-input text-start">
                                    <label for="learning_preference">Learning Preference</label>
                                    <div class="select-area second @error('learning_preferences') is-invalid @enderror">
                                        <select name="learning_preferences[]" multiple class="@error('learning_preferences') is-invalid @enderror">
                                            <option value="visual" @if (in_array('visual', $user->learning_preferences)) selected @endif>Visual Learner</option>
                                            <option value="auditory" @if (in_array('auditory', $user->learning_preferences)) selected @endif>Auditory Learner</option>
                                            <option value="reading_writing" @if (in_array('reading_writing', $user->learning_preferences)) selected @endif>Reading/Writing</option>
                                            <option value="kinesthetic" @if (in_array('kinesthetic', $user->learning_preferences)) selected @endif>Kinesthetic Learner</option>
                                            <option value="collaborative" @if (in_array('collaborative', $user->learning_preferences)) selected @endif>Collaborative Learner</option>
                                            <option value="solitary" @if (in_array('solitary', $user->learning_preferences)) selected @endif>Solitary Learner</option>
                                            <option value="self_paced" @if (in_array('self_paced', $user->learning_preferences)) selected @endif>Self-Paced Learner</option>
                                            <option value="project_based" @if (in_array('project_based', $user->learning_preferences)) selected @endif>Project-Based Learner</option>
                                            <option value="online" @if (in_array('online_courses', $user->learning_preferences)) selected @endif>Online Courses</option>
                                            <option value="in_person" @if (in_array('in_person', $user->learning_preferences)) selected @endif>In-Person Classes</option>
                                        </select>
                                    </div>
                                    @error('learning_preferences')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-input text-start">
                                    <label for="preferred_study_tools">Preferred Study Tools</label>
                                    <div class="select-area second @error('preferred_study_tools') is-invalid @enderror">
                                        <select name="preferred_study_tools[]" multiple class="@error('preferred_study_tools') is-invalid @enderror">
                                           <optgroup label="General">
                                                <option value="flashcards" @if (in_array('flashcards', $user->preferred_study_tools)) selected @endif>Flashcards</option>
                                                <option value="mind_maps" @if (in_array('mind_maps', $user->preferred_study_tools)) selected @endif>Mind Mapping</option>
                                                <option value="note_taking" @if (in_array('note_taking', $user->preferred_study_tools)) selected @endif>Note-taking Apps</option>
                                                <option value="ai_tools" @if (in_array('ai_tools', $user->preferred_study_tools)) selected @endif>AI-powered Study Apps</option>
                                                <option value="online_tutorials" @if (in_array('online_tutorials', $user->preferred_study_tools)) selected @endif>Online Tutorials</option>
                                                <option value="textbooks" @if (in_array('textbooks', $user->preferred_study_tools)) selected @endif>Textbooks</option>
                                                <option value="videos" @if (in_array('videos', $user->preferred_study_tools)) selected @endif>Videos Lectures</option>
                                                <option value="study_groups" @if (in_array('study_groups', $user->preferred_study_tools)) selected @endif>Study Groups</option>
                                            </optgroup>
                                            <optgroup label="ai_tools">
                                                @foreach (\App\Models\Tool::orderBy('name')->get() as $tool)
                                                <option value="{{ $tool->slug }}" @if (in_array($tool->slug, $user->preferred_study_tools)) selected @endif>{{ $tool->name }}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                    @error('preferred_study_tools')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-input text-start">
                                    <label for="education">Education</label>
                                    <div class="input-area second @error('education') is-invalid @enderror">
                                        <input type="text" name="education" value="{{ $user->education }}" placeholder="Ex: BSc in Computer Science" class="@error('education') is-invalid @enderror">
                                    </div>
                                    @error('education')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-input text-start">
                                    <label for="awards">Awards</label>
                                    <div class="input-area second @error('awards') is-invalid @enderror">
                                        <input type="text" name="awards" value="{{ $user->awards }}" placeholder="Ex: Five-Star Honors" class="@error('awards') is-invalid @enderror">
                                    </div>
                                    @error('awards')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single-input text-start">
                                    <label for="skills">Skills</label>
                                    <div class="input-area second @error('skills') is-invalid @enderror">
                                        <input type="text" name="skills" value="{{ $user->skills }}" placeholder="Ex: Web Development, Graphic Design, Digital Marketing, SEO, Photography" class="@error('skills') is-invalid @enderror">
                                    </div>
                                    @error('skills')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-input text-start">
                                    <label for="hobbies">Hobbies</label>
                                    <div class="input-area second @error('hobbies') is-invalid @enderror">
                                        <input type="text" name="hobbies" value="{{ $user->hobbies }}" placeholder="Ex: Cooking, Dancing, Gaming, Music, Writing, Traveling, Hiking" class="@error('hobbies') is-invalid @enderror">
                                    </div>
                                    @error('hobbies')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-input text-start">
                                    <label for="languages">Languages</label>
                                    <div class="select-area second @error('languages') is-invalid @enderror">
                                        <select name="languages[]" multiple class="@error('languages') is-invalid @enderror">
                                            <option value="english" @if (in_array('english', $user->languages)) selected @endif>English</option>
                                            <option value="spanish" @if (in_array('spanish', $user->languages)) selected @endif>Spanish</option>
                                            <option value="french" @if (in_array('french', $user->languages)) selected @endif>French</option>
                                            <option value="german" @if (in_array('german', $user->languages)) selected @endif>German</option>
                                            <option value="chinese" @if (in_array('chinese', $user->languages)) selected @endif>Chinese</option>
                                            <option value="japanese" @if (in_array('japanese', $user->languages)) selected @endif>Japanese</option>
                                            <option value="arabic" @if (in_array('arabic', $user->languages)) selected @endif>Arabic</option>
                                            <option value="russian" @if (in_array('russian', $user->languages)) selected @endif>Russian</option>
                                            <option value="portuguese" @if (in_array('portuguese', $user->languages)) selected @endif>Portuguese</option>
                                            <option value="italian" @if (in_array('italian', $user->languages)) selected @endif>Italian</option>
                                            <option value="hindi" @if (in_array('hindi', $user->languages)) selected @endif>Hindi</option>
                                            <option value="korean" @if (in_array('korean', $user->languages)) selected @endif>Korean</option>
                                            <option value="turkish" @if (in_array('turkish', $user->languages)) selected @endif>Turkish</option>
                                            <option value="dutch" @if (in_array('dutch', $user->languages)) selected @endif>Dutch</option>
                                            <option value="swedish" @if (in_array('swedish', $user->languages)) selected @endif>Swedish</option>
                                            <option value="norwegian" @if (in_array('norwegian', $user->languages)) selected @endif>Norwegian</option>
                                            <option value="danish" @if (in_array('danish', $user->languages)) selected @endif>Danish</option>
                                            <option value="finnish" @if (in_array('finnish', $user->languages)) selected @endif>Finnish</option>
                                            <option value="greek" @if (in_array('greek', $user->languages)) selected @endif>Greek</option>
                                            <option value="polish" @if (in_array('polish', $user->languages)) selected @endif>Polish</option>
                                            <option value="hungarian" @if (in_array('hungarian', $user->languages)) selected @endif>Hungarian</option>
                                            <option value="czech" @if (in_array('czech', $user->languages)) selected @endif>Czech</option>
                                            <option value="slovak" @if (in_array('slovak', $user->languages)) selected @endif>Slovak</option>
                                            <option value="bulgarian" @if (in_array('bulgarian', $user->languages)) selected @endif>Bulgarian</option>
                                            <option value="romanian" @if (in_array('romanian', $user->languages)) selected @endif>Romanian</option>
                                            <option value="croatian" @if (in_array('croatian', $user->languages)) selected @endif>Croatian</option>
                                            <option value="serbian" @if (in_array('serbian', $user->languages)) selected @endif>Serbian</option>
                                            <option value="slovenian" @if (in_array('slovenian', $user->languages)) selected @endif>Slovenian</option>
                                            <option value="lithuanian" @if (in_array('lithuanian', $user->languages)) selected @endif>Lithuanian</option>
                                            <option value="latvian" @if (in_array('latvian', $user->languages)) selected @endif>Latvian</option>
                                            <option value="estonian" @if (in_array('estonian', $user->languages)) selected @endif>Estonian</option>
                                            <option value="maltese" @if (in_array('maltese', $user->languages)) selected @endif>Maltese</option>
                                        </select>
                                    </div>
                                    @error('languages')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single-input text-start">
                                    <label for="city">City</label>
                                    <div class="input-area second @error('city') is-invalid @enderror">
                                        <input type="text" name="city" value="{{ $user->city }}" placeholder="Type city" required class="@error('city') is-invalid @enderror">
                                    </div>
                                    @error('city')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-input text-start">
                                    <label for="state">State</label>
                                    <div class="input-area second @error('state') is-invalid @enderror">
                                        <input type="text" name="state" value="{{ $user->state }}" placeholder="Type state" required class="@error('state') is-invalid @enderror">
                                    </div>
                                    @error('state')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-input text-start">
                                    <label for="country">Country</label>
                                    <div class="select-area second @error('country') is-invalid @enderror">
                                        <select name="country" required class="@error('country') is-invalid @enderror">
                                            <option value="Afghanistan" @if ($user->country == 'Afghanistan') selected @endif>Afghanistan</option>
                                            <option value="Albania" @if ($user->country == 'Albania') selected @endif>Albania</option>
                                            <option value="Algeria" @if ($user->country == 'Algeria') selected @endif>Algeria</option>
                                            <option value="Andorra" @if ($user->country == 'Andorra') selected @endif>Andorra</option>
                                            <option value="Angola" @if ($user->country == 'Angola') selected @endif>Angola</option>
                                            <option value="Antigua and Barbuda" @if ($user->country == 'Antigua and Barbuda') selected @endif>Antigua and Barbuda</option>
                                            <option value="Argentina" @if ($user->country == 'Argentina') selected @endif>Argentina</option>
                                            <option value="Armenia" @if ($user->country == 'Armenia') selected @endif>Armenia</option>
                                            <option value="Australia" @if ($user->country == 'Australia') selected @endif>Australia</option>
                                            <option value="Austria" @if ($user->country == 'Austria') selected @endif>Austria</option>
                                            <option value="Azerbaijan" @if ($user->country == 'Azerbaijan') selected @endif>Azerbaijan</option>
                                            <option value="Bahamas" @if ($user->country == 'Bahamas') selected @endif>Bahamas</option>
                                            <option value="Bahrain" @if ($user->country == 'Bahrain') selected @endif>Bahrain</option>
                                            <option value="Bangladesh" @if ($user->country == 'Bangladesh') selected @endif>Bangladesh</option>
                                            <option value="Barbados" @if ($user->country == 'Barbados') selected @endif>Barbados</option>
                                            <option value="Belarus" @if ($user->country == 'Belarus') selected @endif>Belarus</option>
                                            <option value="Belgium" @if ($user->country == 'Belgium') selected @endif>Belgium</option>
                                            <option value="Belize" @if ($user->country == 'Belize') selected @endif>Belize</option>
                                            <option value="Benin" @if ($user->country == 'Benin') selected @endif>Benin</option>
                                            <option value="Bhutan" @if ($user->country == 'Bhutan') selected @endif>Bhutan</option>
                                            <option value="Bolivia" @if ($user->country == 'Bolivia') selected @endif>Bolivia</option>
                                            <option value="Bosnia and Herzegovina" @if ($user->country == 'Bosnia and Herzegovina') selected @endif>Bosnia and Herzegovina</option>
                                            <option value="Botswana" @if ($user->country == 'Botswana') selected @endif>Botswana</option>
                                            <option value="Brazil" @if ($user->country == 'Brazil') selected @endif>Brazil</option>
                                            <option value="Brunei" @if ($user->country == 'Brunei') selected @endif>Brunei</option>
                                            <option value="Bulgaria" @if ($user->country == 'Bulgaria') selected @endif>Bulgaria</option>
                                            <option value="Burkina Faso" @if ($user->country == 'Burkina Faso') selected @endif>Burkina Faso</option>
                                            <option value="Burundi" @if ($user->country == 'Burundi') selected @endif>Burundi</option>
                                            <option value="Côte d'Ivoire" @if ($user->country == "Côte d'Ivoire") selected @endif>Côte d'Ivoire</option>
                                            <option value="Cabo Verde" @if ($user->country == 'Cabo Verde') selected @endif>Cabo Verde</option>
                                            <option value="Cambodia" @if ($user->country == 'Cambodia') selected @endif>Cambodia</option>
                                            <option value="Cameroon" @if ($user->country == 'Cameroon') selected @endif>Cameroon</option>
                                            <option value="Canada" @if ($user->country == 'Canada') selected @endif>Canada</option>
                                            <option value="Central African Republic" @if ($user->country == 'Central African Republic') selected @endif>Central African Republic</option>
                                            <option value="Chad" @if ($user->country == 'Chad') selected @endif>Chad</option>
                                            <option value="Chile" @if ($user->country == 'Chile') selected @endif>Chile</option>
                                            <option value="China" @if ($user->country == 'China') selected @endif>China</option>
                                            <option value="Colombia" @if ($user->country == 'Colombia') selected @endif>Colombia</option>
                                            <option value="Comoros" @if ($user->country == 'Comoros') selected @endif>Comoros</option>
                                            <option value="Congo (Congo-Brazzaville)" @if ($user->country == 'Congo (Congo-Brazzaville)') selected @endif>Congo (Congo-Brazzaville)</option>
                                            <option value="Costa Rica" @if ($user->country == 'Costa Rica') selected @endif>Costa Rica</option>
                                            <option value="Croatia" @if ($user->country == 'Croatia') selected @endif>Croatia</option>
                                            <option value="Cuba" @if ($user->country == 'Cuba') selected @endif>Cuba</option>
                                            <option value="Cyprus" @if ($user->country == 'Cyprus') selected @endif>Cyprus</option>
                                            <option value="Czechia (Czech Republic)" @if ($user->country == 'Czechia (Czech Republic)') selected @endif>Czechia (Czech Republic)</option>
                                            <option value="Democratic Republic of the Congo" @if ($user->country == 'Democratic Republic of the Congo') selected @endif>Democratic Republic of the Congo</option>
                                            <option value="Denmark" @if ($user->country == 'Denmark') selected @endif>Denmark</option>
                                            <option value="Djibouti" @if ($user->country == 'Djibouti') selected @endif>Djibouti</option>
                                            <option value="Dominica" @if ($user->country == 'Dominica') selected @endif>Dominica</option>
                                            <option value="Dominican Republic" @if ($user->country == 'Dominican Republic') selected @endif>Dominican Republic</option>
                                            <option value="Ecuador" @if ($user->country == 'Ecuador') selected @endif>Ecuador</option>
                                            <option value="Egypt" @if ($user->country == 'Egypt') selected @endif>Egypt</option>
                                            <option value="El Salvador" @if ($user->country == 'El Salvador') selected @endif>El Salvador</option>
                                            <option value="Equatorial Guinea" @if ($user->country == 'Equatorial Guinea') selected @endif>Equatorial Guinea</option>
                                            <option value="Eritrea" @if ($user->country == 'Eritrea') selected @endif>Eritrea</option>
                                            <option value="Estonia" @if ($user->country == 'Estonia') selected @endif>Estonia</option>
                                            <option value="Eswatini (fmr. `Swaziland`)" @if ($user->country == 'Eswatini (fmr. `Swaziland`)') selected @endif>Eswatini (fmr. "Swaziland")</option>
                                            <option value="Ethiopia" @if ($user->country == 'Ethiopia') selected @endif>Ethiopia</option>
                                            <option value="Fiji" @if ($user->country == 'Fiji') selected @endif>Fiji</option>
                                            <option value="Finland" @if ($user->country == 'Finland') selected @endif>Finland</option>
                                            <option value="France" @if ($user->country == 'France') selected @endif>France</option>
                                            <option value="Gabon" @if ($user->country == 'Gabon') selected @endif>Gabon</option>
                                            <option value="Gambia" @if ($user->country == 'Gambia') selected @endif>Gambia</option>
                                            <option value="Georgia" @if ($user->country == 'Georgia') selected @endif>Georgia</option>
                                            <option value="Germany" @if ($user->country == 'Germany') selected @endif>Germany</option>
                                            <option value="Ghana" @if ($user->country == 'Ghana') selected @endif>Ghana</option>
                                            <option value="Greece" @if ($user->country == 'Greece') selected @endif>Greece</option>
                                            <option value="Grenada" @if ($user->country == 'Grenada') selected @endif>Grenada</option>
                                            <option value="Guatemala" @if ($user->country == 'Guatemala') selected @endif>Guatemala</option>
                                            <option value="Guinea" @if ($user->country == 'Guinea') selected @endif>Guinea</option>
                                            <option value="Guinea-Bissau" @if ($user->country == 'Guinea-Bissau') selected @endif>Guinea-Bissau</option>
                                            <option value="Guyana" @if ($user->country == 'Guyana') selected @endif>Guyana</option>
                                            <option value="Haiti" @if ($user->country == 'Haiti') selected @endif>Haiti</option>
                                            <option value="Holy See" @if ($user->country == 'Holy See') selected @endif>Holy See</option>
                                            <option value="Honduras" @if ($user->country == 'Honduras') selected @endif>Honduras</option>
                                            <option value="Hungary" @if ($user->country == 'Hungary') selected @endif>Hungary</option>
                                            <option value="Iceland" @if ($user->country == 'Iceland') selected @endif>Iceland</option>
                                            <option value="India" @if ($user->country == 'India') selected @endif>India</option>
                                            <option value="Indonesia" @if ($user->country == 'Indonesia') selected @endif>Indonesia</option>
                                            <option value="Iran" @if ($user->country == 'Iran') selected @endif>Iran</option>
                                            <option value="Iraq" @if ($user->country == 'Iraq') selected @endif>Iraq</option>
                                            <option value="Ireland" @if ($user->country == 'Ireland') selected @endif>Ireland</option>
                                            <option value="Israel" @if ($user->country == 'Israel') selected @endif>Israel</option>
                                            <option value="Italy" @if ($user->country == 'Italy') selected @endif>Italy</option>
                                            <option value="Jamaica" @if ($user->country == 'Jamaica') selected @endif>Jamaica</option>
                                            <option value="Japan" @if ($user->country == 'Japan') selected @endif>Japan</option>
                                            <option value="Jordan" @if ($user->country == 'Jordan') selected @endif>Jordan</option>
                                            <option value="Kazakhstan" @if ($user->country == 'Kazakhstan') selected @endif>Kazakhstan</option>
                                            <option value="Kenya" @if ($user->country == 'Kenya') selected @endif>Kenya</option>
                                            <option value="Kiribati" @if ($user->country == 'Kiribati') selected @endif>Kiribati</option>
                                            <option value="Kuwait" @if ($user->country == 'Kuwait') selected @endif>Kuwait</option>
                                            <option value="Kyrgyzstan" @if ($user->country == 'Kyrgyzstan') selected @endif>Kyrgyzstan</option>
                                            <option value="Laos" @if ($user->country == 'Laos') selected @endif>Laos</option>
                                            <option value="Latvia" @if ($user->country == 'Latvia') selected @endif>Latvia</option>
                                            <option value="Lebanon" @if ($user->country == 'Lebanon') selected @endif>Lebanon</option>
                                            <option value="Lesotho" @if ($user->country == 'Lesotho') selected @endif>Lesotho</option>
                                            <option value="Liberia" @if ($user->country == 'Liberia') selected @endif>Liberia</option>
                                            <option value="Libya" @if ($user->country == 'Libya') selected @endif>Libya</option>
                                            <option value="Liechtenstein" @if ($user->country == 'Liechtenstein') selected @endif>Liechtenstein</option>
                                            <option value="Lithuania" @if ($user->country == 'Lithuania') selected @endif>Lithuania</option>
                                            <option value="Luxembourg" @if ($user->country == 'Luxembourg') selected @endif>Luxembourg</option>
                                            <option value="Madagascar" @if ($user->country == 'Madagascar') selected @endif>Madagascar</option>
                                            <option value="Malawi" @if ($user->country == 'Malawi') selected @endif>Malawi</option>
                                            <option value="Malaysia" @if ($user->country == 'Malaysia') selected @endif>Malaysia</option>
                                            <option value="Maldives" @if ($user->country == 'Maldives') selected @endif>Maldives</option>
                                            <option value="Mali" @if ($user->country == 'Mali') selected @endif>Mali</option>
                                            <option value="Malta" @if ($user->country == 'Malta') selected @endif>Malta</option>
                                            <option value="Marshall Islands" @if ($user->country == 'Marshall Islands') selected @endif>Marshall Islands</option>
                                            <option value="Mauritania" @if ($user->country == 'Mauritania') selected @endif>Mauritania</option>
                                            <option value="Mauritius" @if ($user->country == 'Mauritius') selected @endif>Mauritius</option>
                                            <option value="Mexico" @if ($user->country == 'Mexico') selected @endif>Mexico</option>
                                            <option value="Micronesia" @if ($user->country == 'Micronesia') selected @endif>Micronesia</option>
                                            <option value="Moldova" @if ($user->country == 'Moldova') selected @endif>Moldova</option>
                                            <option value="Monaco" @if ($user->country == 'Monaco') selected @endif>Monaco</option>
                                            <option value="Mongolia" @if ($user->country == 'Mongolia') selected @endif>Mongolia</option>
                                            <option value="Montenegro" @if ($user->country == 'Montenegro') selected @endif>Montenegro</option>
                                            <option value="Morocco" @if ($user->country == 'Morocco') selected @endif>Morocco</option>
                                            <option value="Mozambique" @if ($user->country == 'Mozambique') selected @endif>Mozambique</option>
                                            <option value="Myanmar" @if ($user->country == 'Myanmar') selected @endif>Myanmar</option>
                                            <option value="Namibia" @if ($user->country == 'Namibia') selected @endif>Namibia</option>
                                            <option value="Nauru" @if ($user->country == 'Nauru') selected @endif>Nauru</option>
                                            <option value="Nepal" @if ($user->country == 'Nepal') selected @endif>Nepal</option>
                                            <option value="Netherlands" @if ($user->country == 'Netherlands') selected @endif>Netherlands</option>
                                            <option value="New Zealand" @if ($user->country == 'New Zealand') selected @endif>New Zealand</option>
                                            <option value="Nicaragua" @if ($user->country == 'Nicaragua') selected @endif>Nicaragua</option>
                                            <option value="Niger" @if ($user->country == 'Niger') selected @endif>Niger</option>
                                            <option value="Nigeria" @if ($user->country == 'Nigeria') selected @endif>Nigeria</option>
                                            <option value="North Korea" @if ($user->country == 'North Korea') selected @endif>North Korea</option>
                                            <option value="North Macedonia" @if ($user->country == 'North Macedonia') selected @endif>North Macedonia</option>
                                            <option value="Norway" @if ($user->country == 'Norway') selected @endif>Norway</option>
                                            <option value="Oman" @if ($user->country == 'Oman') selected @endif>Oman</option>
                                            <option value="Pakistan" @if ($user->country == 'Pakistan') selected @endif>Pakistan</option>
                                            <option value="Palau" @if ($user->country == 'Palau') selected @endif>Palau</option>
                                            <option value="Pale" @if ($user->country == 'Pale') selected @endif>Pale</option>
                                            <option value="Panama" @if ($user->country == 'Panama') selected @endif>Panama</option>
                                            <option value="Papua New Guinea" @if ($user->country == 'Papua New Guinea') selected @endif>Papua New Guinea</option>
                                            <option value="Paraguay" @if ($user->country == 'Paraguay') selected @endif>Paraguay</option>
                                            <option value="Peru" @if ($user->country == 'Peru') selected @endif>Peru</option>
                                            <option value="Philippines" @if ($user->country == 'Philippines') selected @endif>Philippines</option>
                                            <option value="Poland" @if ($user->country == 'Poland') selected @endif>Poland</option>
                                            <option value="Portugal" @if ($user->country == 'Portugal') selected @endif>Portugal</option>
                                            <option value="Qatar" @if ($user->country == 'Qatar') selected @endif>Qatar</option>
                                            <option value="Romania" @if ($user->country == 'Romania') selected @endif>Romania</option>
                                            <option value="Russia" @if ($user->country == 'Russia') selected @endif>Russia</option>
                                            <option value="Rwanda" @if ($user->country == 'Rwanda') selected @endif>Rwanda</option>
                                            <option value="Saint Kitts and Nevis" @if ($user->country == 'Saint Kitts and Nevis') selected @endif>Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia" @if ($user->country == 'Saint Lucia') selected @endif>Saint Lucia</option>
                                            <option value="Saint Vincent and the Grenadines" @if ($user->country == 'Saint Vincent and the Grenadines') selected @endif>Saint Vincent and the Grenadines</option>
                                            <option value="Samoa" @if ($user->country == 'Samoa') selected @endif>Samoa</option>
                                            <option value="San Marino" @if ($user->country == 'San Marino') selected @endif>San Marino</option>
                                            <option value="Sao Tome and Principe" @if ($user->country == 'Sao Tome and Principe') selected @endif>Sao Tome and Principe</option>
                                            <option value="Saudi Arabia" @if ($user->country == 'Saudi Arabia') selected @endif>Saudi Arabia</option>
                                            <option value="Senegal" @if ($user->country == 'Senegal') selected @endif>Senegal</option>
                                            <option value="Serbia" @if ($user->country == 'Serbia') selected @endif>Serbia</option>
                                            <option value="Seychelles" @if ($user->country == 'Seychelles') selected @endif>Seychelles</option>
                                            <option value="Sierra Leone" @if ($user->country == 'Sierra Leone') selected @endif>Sierra Leone</option>
                                            <option value="Singapore" @if ($user->country == 'Singapore') selected @endif>Singapore</option>
                                            <option value="Slovakia" @if ($user->country == 'Slovakia') selected @endif>Slovakia</option>
                                            <option value="Slovenia" @if ($user->country == 'Slovenia') selected @endif>Slovenia</option>
                                            <option value="Solomon Islands" @if ($user->country == 'Solomon Islands') selected @endif>Solomon Islands</option>
                                            <option value="Somalia" @if ($user->country == 'Somalia') selected @endif>Somalia</option>
                                            <option value="South Africa" @if ($user->country == 'South Africa') selected @endif>South Africa</option>
                                            <option value="South Korea" @if ($user->country == 'South Korea') selected @endif>South Korea</option>
                                            <option value="South Sudan" @if ($user->country == 'South Sudan') selected @endif>South Sudan</option>
                                            <option value="Spain" @if ($user->country == 'Spain') selected @endif>Spain</option>
                                            <option value="Sri Lanka" @if ($user->country == 'Sri Lanka') selected @endif>Sri Lanka</option>
                                            <option value="Sudan" @if ($user->country == 'Sudan') selected @endif>Sudan</option>
                                            <option value="Suriname" @if ($user->country == 'Suriname') selected @endif>Suriname</option>
                                            <option value="Sweden" @if ($user->country == 'Sweden') selected @endif>Sweden</option>
                                            <option value="Switzerland" @if ($user->country == 'Switzerland') selected @endif>Switzerland</option>
                                            <option value="Syria" @if ($user->country == 'Syria') selected @endif>Syria</option>
                                            <option value="Tajikistan" @if ($user->country == 'Tajikistan') selected @endif>Tajikistan</option>
                                            <option value="Tanzania" @if ($user->country == 'Tanzania') selected @endif>Tanzania</option>
                                            <option value="Thailand" @if ($user->country == 'Thailand') selected @endif>Thailand</option>
                                            <option value="Timor-Leste" @if ($user->country == 'Timor-Leste') selected @endif>Timor-Leste</option>
                                            <option value="Togo" @if ($user->country == 'Togo') selected @endif>Togo</option>
                                            <option value="Tonga" @if ($user->country == 'Tonga') selected @endif>Tonga</option>
                                            <option value="Trinidad and Tobago" @if ($user->country == 'Trinidad and Tobago') selected @endif>Trinidad and Tobago</option>
                                            <option value="Tunisia" @if ($user->country == 'Tunisia') selected @endif>Tunisia</option>
                                            <option value="Turkey" @if ($user->country == 'Turkey') selected @endif>Turkey</option>
                                            <option value="Turkmenistan" @if ($user->country == 'Turkmenistan') selected @endif>Turkmenistan</option>
                                            <option value="Tuvalu" @if ($user->country == 'Tuvalu') selected @endif>Tuvalu</option>
                                            <option value="Uganda" @if ($user->country == 'Uganda') selected @endif>Uganda</option>
                                            <option value="Ukraine" @if ($user->country == 'Ukraine') selected @endif>Ukraine</option>
                                            <option value="United Arab Emirates" @if ($user->country == 'United Arab Emirates') selected @endif>United Arab Emirates</option>
                                            <option value="United Kingdom" @if ($user->country == 'United Kingdom') selected @endif>United Kingdom</option>
                                            <option value="United States" @if ($user->country == 'United States') selected @endif>United States of America</option>
                                            <option value="Uruguay" @if ($user->country == 'Uruguay') selected @endif>Uruguay</option>
                                            <option value="Uzbekistan" @if ($user->country == 'Uzbekistan') selected @endif>Uzbekistan</option>
                                            <option value="Vanuatu" @if ($user->country == 'Vanuatu') selected @endif>Vanuatu</option>
                                            <option value="Venezuela" @if ($user->country == 'Venezuela') selected @endif>Venezuela</option>
                                            <option value="Vietnam" @if ($user->country == 'Vietnam') selected @endif>Vietnam</option>
                                            <option value="Yemen" @if ($user->country == 'Yemen') selected @endif>Yemen</option>
                                            <option value="Zambia" @if ($user->country == 'Zambia') selected @endif>Zambia</option>
                                            <option value="Zimbabwe" @if ($user->country == 'Zimbabwe') selected @endif>Zimbabwe</option>
                                        </select>
                                    </div>
                                    @error('country')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-4">
                                <div class="single-input text-start">
                                    <h6>Bio</h6>
                                    <div class="input-area second @error('bio') is-invalid @enderror">
                                        <textarea name="bio" placeholder="Type your bio" class="@error('bio') is-invalid @enderror">{{ $user->bio }}</textarea>
                                    </div>
                                    @error('bio')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12 mt-4">
                                <div class="btn-area text-end">
                                    <button type="submit" class="cmn-btn">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('input[name="avatar"]').on('change', function() {
            let formData = new FormData();
            formData.append('avatar', $(this).prop('files')[0]);
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: '/upload-avatar',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    // if (data.status === 'success') {
                    //     $('.preview-image').attr('src', data.path);
                    // }
                }
            });
        });
    
        $('input[name="cover"]').on('change', function() {
            let formData = new FormData();
            formData.append('cover', $(this).prop('files')[0]);
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: '/upload-cover',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    // if (data.status === 'success') {
                    //     $('.preview-image').attr('src', data.path);
                    // }
                }
            });
        });
        
        $('select[name="gender"]').on('change', function() {
            // update nice select
            $(this).niceSelect('update');

            if ($(this).val() === 'other') {
                $('input.other_gender').parent().removeClass('select-area').addClass('input-area');
                $('input.other_gender').removeClass('d-none');
            } else {
                $('input.other_gender').parent().removeClass('input-area').addClass('select-area');
                $('input.other_gender').addClass('d-none');
            }
        });

        $('select[name="preferred_pronouns"]').on('change', function() {
            // update nice select
            $(this).niceSelect('update');
            
            if ($(this).val() === 'other') {
                $('input.other_pronouns').parent().removeClass('select-area').addClass('input-area');
                $('input.other_pronouns').removeClass('d-none');
            } else {
                $('input.other_pronouns').parent().removeClass('input-area').addClass('select-area');
                $('input.other_pronouns').addClass('d-none');
            }
        });
    });
</script>
@endsection
