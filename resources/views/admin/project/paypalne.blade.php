<div class="row row-sm">
    <div class="col-lg-6">
        <div class="form-group has-success mg-b-0">
            <label class="form-label"> السعر </label>
            <input name='price' v-model='price' class="form-control" required="" type="text">
        </div>
    </div>
    <div class="col-lg-6 mg-t-20 mg-lg-t-0">
        <div class="form-group has-danger mg-b-0">
            <label class="form-label"> خطة الدفع (كم دفعة) </label>
            <input v-model.number="Count" name="pay_plan" class="form-control" required="" type="number">
        </div>
    </div>
    <div class="col-lg-3 mt-1" v-for="i in Count">
        <div class="form-group has-success mg-b-0">
            <label class="form-label"> </label>
            <input type="number" multiple name='pers[]' placeholder="10%" class="form-control" required="">
        </div>
    </div>
</div>
