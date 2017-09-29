<template>
    <div>

        <bread-crumb :title="title" :paths="breadcrumbs"></bread-crumb>

        <div class=" wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">

                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>{{title}}</h5>

                            <div class="ibox-tools"></div>
                        </div>
                        <div class="ibox-content">

                            <form class="form-horizontal" @submit.prevent="createData">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">医生名称：</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" v-model="data.name">
                                        <label class="help-block error" v-if="errors">{{errors['name']}}</label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">科室：</label>

                                    <div class="col-sm-10">
                                        <select class="form-control" v-model="data.dept_id">
                                            <option value="0">请选择</option>
                                            <option v-for="dept in depts" :value="dept.id">
                                                {{dept.name}}
                                            </option>
                                        </select>
                                        <label class="help-block error" v-if="errors">{{errors['dept_id']}}</label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">头像：</label>

                                    <div class="col-sm-10">
                                        <vue-core-image-upload
                                                text="上传头像"
                                                :class="['btn', 'btn-primary']"
                                                :crop="true"
                                                :cropRatio="1:1"
                                                :cropBtn="{ok:'确认','cancel':'取消'}"
                                                @imageuploaded="imageuploaded"
                                                :data="data"
                                                :max-file-size="5242880"
                                                url="upload_img">
                                        </vue-core-image-upload>
                                        <img width="128" height="128" :src="data.image" alt="暂无">
                                        <label class="help-block error" v-if="errors">{{errors['sex']}}</label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">性别：</label>

                                    <div class="col-sm-10">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" v-model="data.sex" name="optionsRadios"
                                                       id="optionsRadios1" value="0" checked>
                                                男
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" v-model="data.sex" name="optionsRadios"
                                                       id="optionsRadios2" value="1">
                                                女
                                            </label>
                                        </div>
                                        <label class="help-block error" v-if="errors">{{errors['sex']}}</label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">毕业院校：</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" v-model="data.graduate">
                                        <label class="help-block error" v-if="errors">{{errors['graduate']}}</label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">专业：</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" v-model="data.major">
                                        <label class="help-block error" v-if="errors">{{errors['major']}}</label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">职位：</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" v-model="data.position">
                                        <label class="help-block error" v-if="errors">{{errors['position']}}</label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">简介：</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" v-model="data.info">
                                        <label class="help-block error" v-if="errors">{{errors['info']}}</label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button type="submit" class="btn btn-primary">提交
                                        </button>
                                        <a v-link="{name:'doctor_index'}" class="btn btn-white">取消</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</template>

<script>

    import BreadCrumb from '../partial/bread-crumb';
    import VueCoreImageUpload  from 'vue-core-image-upload';

    export default {
        ready: function () {
            this.data.id = this.$route.params.id;
            this.$http.get('doctor/create').then(function (result) {
                let data = result.data;
                if (data.flag == true && data.data) {
                    this.depts = data.data;
                }
            });

            this.$http.get('dept/' + this.data.id + '/edit').then(function (result) {
                let data = result.data;
                if (data.flag == true && data.data) {
                    this.data = data.data;
                    this.name = data.name;
                    this.image = data.image;
                    this.graduate = data.graduate;
                    this.major = data.major;
                    this.position = data.position;
                    this.info = data.info;
                    this.sex = data.sex;
                    this.dept_id = data.dept_id;
                }
                this.$toast['success'](data.msg);
            })

        },
        data: function () {
            return {
                title: '科室修改',
                breadcrumbs: [
                    {
                        name: '首页',
                        url: ''
                    },
                    {
                        name: '科室修改',
                        url: ''
                    }
                ],
                depts: [],
                data: {
                    id: 0,
                    name: '',
                    image: ''
                },
                errors: null
            }
        },
        components: {
            'bread-crumb': BreadCrumb
        },
        methods: {
            updateData: function () {
                this.$http.put('dept/' + this.data.id, this.data).then(function (result) {
                    let data = result.data;
                    if (data.flag == true) {
                        this.$route.router.go('/main/dept/index');
                    }
                    if (data.errors) {
                        this.errors = data.errors;
                    }
                    this.$toast['success'](data.msg);
                });
            },
            imageuploaded(res) {
                this.data.image = res.filename;
                if (res.errcode == 0) {
                    this.src = 'http://img1.vued.vanthink.cn/vued751d13a9cb5376b89cb6719e86f591f3.png';
                }
            }
        }
    }
</script>