@extends('layouts.default')
@section('content')
    <h1>帮助页</h1>
    <form action="/upload" method="post" enctype="multipart/form-data">    <!--处理页面起个名字，做文件上传是这个属性：enctype="multipart/form-data"-->
        　　<input type="file" name="file"/>  //浏览文件的按钮
        　　<input type="submit" value="上传" />  //提交的上传按钮
        <input type="hidden" name="_token"         value="{csrf_token()}"/>
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
    </form>
    @stop
@section('title')
    积极哦
    @stop