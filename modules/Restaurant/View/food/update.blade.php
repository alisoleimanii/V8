<?php
/**
 * @var Food $food
 */

use Module\Restaurant\Model\Food;

?>
@include("assets.main-head",["title"=>"V8","subTitle"=>__("restaurant.editFood","Edit Food")])

<style>
    .select2-container {
        width: 70% !important;
        height: 14px !important;
    }

    .select2-container--default .select2-selection--multiple {
        height: 50px !important;
        line-height: 50px !important;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__rendered {
        margin-top: 10px !important;
        height: 30px !important;
        line-height: 30px !important;
    }

    .select2-selection__choice {
        height: 30px !important;
        line-height: 30px !important;
    }
</style>
<div class="col-md-12">
    <div class="breadcrumb-box border shadow">
        <ul class="breadcrumb">
            <li><a>{{__("restaurant.editFood","Edit Food")}}</a></li>
        </ul>
    </div>
</div>
<div class="input-group col-md-12 mt-3">
    <div class="input-group-prepend">
        <span class="input-group-text" style="height: 50px">نام غذا</span>
    </div>
    <input type="text" value="{{$food->name}}" class="form-control py-4" id="name">
</div>
<div class="input-group col-md-6 mt-3">
    <div class="input-group-prepend">
        <span class="input-group-text" style="height: 50px">وعده ها</span>
    </div>
    <select class="select2" multiple id="meals" value="">
        @foreach($meals as $meal)
            <option value="{{$meal->id}}">{{$meal->title}}</option>
        @endforeach
    </select>
</div>

<div class="input-group col-md-6 mt-3">
    <div class="input-group-prepend">
        <span class="input-group-text" style="height: 50px">دسته‌بندی</span>
    </div>
    <select class="select2" multiple id="categories">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->title}}</option>
        @endforeach
    </select>
</div>


<div class="input-group col-md-6 mt-3">
    <div class="input-group-prepend">
        <span class="input-group-text" style="height: 50px">قیمت</span>
    </div>
    <input type="text" value="{{$food->price}}" class="form-control py-4" id="price">
</div>

<div class="input-group col-md-6 mt-3">
    <div class="input-group-prepend">
        <span class="input-group-text" style="height: 50px">تصویر</span>
    </div>
    <input type="file" class="mt-2  ml-3" id="image">
</div>
<div class="input-group col-md-12 mt-3">
    <textarea rows="4" placeholder="توضیحات" class="form-control pt-2"
              id="description">{{$food->description}}</textarea>
</div>


<button class="submit btn btn-success col-md-2 mx-auto mt-4" style="font-size: 18px">ثبت تغییرات</button>
@include("assets.main-foot")
<script>
    $("#meals").select2().val([{{implode(",",$food->getMealsIds())}}]).trigger("change")
    $("#categories").select2().val([{{implode(",",$food->getCategoryIds())}}]).trigger("change")
    $(".submit").click(function () {
        submiter(["#name", "#description", "#meals", "#categories", "#price"], "api/food/update/{{$food->id}}", "POST", ["#image"]);
    })
</script>