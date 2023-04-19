<div class="card-body">
    <div class="main-content-label mg-b-5"> عنوان المشروع </div>
    <div class="row row-sm mg-b-20">
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <p class="mg-b-10"> المنطقة </p>
            <select v-model='region_id' name='region_id' @change="getArea()" class="form-control">
                @foreach (App\Models\Location::all() as $t)
                    <option value="{{ $t->id }}">{{ $t->location }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <p class="mg-b-10"> العنوان </p>
            <select v-model='area_id' name='area_id' class="form-control">
                <option v-for='ar in areas' v-bind:value="ar.id"> @{{ ar.area }}</option>
            </select>
        </div><!-- col-4 -->
    </div>
</div>
