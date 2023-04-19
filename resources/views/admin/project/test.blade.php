{{-- <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                    سعر وخطة الدفع
                                </div>
                                @include('admin.project.paypalne')
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                        <div class="card">
                            @include('admin.project.place')
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                        <div class="card">
                            @include('admin.project.planlocation')
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                    مرفقات المشروع
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg-6 mt-2">
                                        <div class="form-group has-success mg-b-0">
                                            <label class="form-label">صور المشروع* </label>
                                            <input name='image[]' multiple class="form-control" required=""
                                                type="file">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <div class="form-group has-success mg-b-0">
                                            <label class="form-label">pdf(1) </label>
                                            <input name='pdf' class="form-control" required="" type="file">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <div class="form-group has-success mg-b-0">
                                            <label class="form-label">رابط الفيديو </label>
                                            <input name='vedio_link' class="form-control" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 mt-2">
                                        <div class="form-group has-success mg-b-0">
                                            <label class="form-label"> رابط الموقع </label>
                                            <input type="text" v-model='fram' name='plan'
                                                class="form-control form-control-lg">
                                            <span> (ضع رابط الخريطة واضغط معالجة يجب ان تظهر الخريطه اسفل الصفحة ) </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <button type="button" @click="convert" class="btn mt-4 btn-info mb-0">
                                            معالجة</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                        <!--div-->
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                    تفاصيل المشروع
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg-4 mt-2">
                                        <p class="mg-b-10"> المطور </p><select name='dev_id' v-model='dev_id'
                                            class="form-control">

                                            @foreach (App\Models\Developer::all() as $t)
                                                <option value="{{ $t->id }}">{{ $t->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 mt-2">
                                        <p class="mg-b-10"> النوع </p><select name='type_id' v-model='type_id'
                                            class="form-control ">
                                            @foreach (App\Models\Type::all() as $t)
                                                <option value="{{ $t->id }}">{{ evaluate($t)['type'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 mt-2">
                                        <p class="mg-b-10"> حالة المشروع </p><select name="status_id" v-model='status_id'
                                            class="form-control ">
                                            @foreach (App\Models\status::all() as $t)
                                                <option value="{{ $t->id }}">{{ $t->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg mt-2 mg-t-10 mg-lg-t-0">
                                        <label class="form-label">الغرف</label>
                                        <input required="" class="form-control" name="rooms" v-model='rooms'
                                            placeholder="...." type="number">
                                    </div>
                                    <div class="col-lg mt-2 mg-t-10 mg-lg-t-0">
                                        <label class="form-label">غرف النوم</label>
                                        <input required="" class="form-control" name="bedrooms" v-model='bedrooms'
                                            placeholder="...." type="number">
                                    </div>
                                    <div class="col-lg mt-2 mg-t-10 mg-lg-t-0">
                                        <label class="form-label">الحمامات</label>
                                        <input required="" class="form-control" name="bath" v-model='bath'
                                            placeholder="...." type="text">
                                    </div>
                                    <div class="col-lg mt-2 mg-t-10 mg-lg-t-0">
                                        <label class="form-label">الكراجات</label>
                                        <input required="" class="form-control" name="garage" v-model='garage'
                                            placeholder="...." type="text">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                    مميزات المشروع
                                </div>
                                <div class="row">
                                    @foreach (App\Models\Amenitie::all() as $t)
                                        <div class="col-lg-3">
                                            <label class="ckbox"><input name='amenitie[]' multiple
                                                    value="{{ $t->id }}" type="checkbox"><span>
                                                    {{ $t->name_ar }} </span></label>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div> --}}