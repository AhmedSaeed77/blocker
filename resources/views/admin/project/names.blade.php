<div class="card-body">
    <div class="main-content-label mg-b-5">
        إدخال اسم ووصف المشروع بالثلاث لغات
    </div>
    <div class="row row-sm">
        <div class="col-lg">
            <label class="form-label">الاسم بالعربية</label>
            <input required="" v-model='name_ar' class="form-control" name="name_ar" placeholder="ادخل الاسم"
                type="text">
        </div>
        <div class="col-lg mg-t-10 mg-lg-t-0">
            <label class="form-label">الاسم باللغة الانجليزية</label>
            <input required="" v-model='name' class="form-control" name="name" placeholder="ادخل الاسم "
                type="text">
        </div>
        <div class="col-lg mg-t-10 mg-lg-t-0">
            <label class="form-label"> الاسم باللغة الفرنسية</label>
            <input required="" v-model='name_fr' class="form-control" name="name_fr" placeholder="ادخل الاسم"
                type="text">
        </div>
    </div>
    <div class="row row-sm mg-t-20">
        <div class="col-lg">
            <label class="form-label"> الوصف باللغة العربية</label>
            <textarea required="" v-model='description_ar' class="form-control" name="description_ar" placeholder="ادخل الوصف"
                rows="3"></textarea>
        </div>
        <div class="col-lg mg-t-10 mg-lg-t-0">
            <label class="form-label"> الوصف باللغة الانجليزية</label>
            <textarea required="" v-model='description' class="form-control" name="description" placeholder="ادخل الوصف"
                rows="3"></textarea>
        </div>
        <div class="col-lg mg-t-10 mg-lg-t-0">
            <label class="form-label"> الوصف باللغة الفرنسية </label>
            <textarea required="" v-model='description_fr' class="form-control" name="description_fr" placeholder="ادخل الوصف"
                rows="3"></textarea>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg">
            <label class="form-label"> كود المشروع</label>
            <input required="" v-model='code' class="form-control" name="code" placeholder="...ادخل هنا"
                type="text">
        </div>
    </div>
</div>
