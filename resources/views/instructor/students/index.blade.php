@extends('layouts.instructor')

@section('content')
<div class="container">
  <div class="panel panel-success">
    <div class="panel-body">
      <div id="toolbar">
      </div>
      <table id="school-list" class="table table-condensed table-responsive">
          <thead>
              <tr>
                <th data-field="" checkbox="true">
                    
                </th>
                <th data-field="school_code">
                    学校编号
                </th>
                <th data-field="school_name">
                    学校名称
                </th>
                <th data-field="school_level">
                    学校级别
                </th>
                <th data-field="school_subject_name">
                  学校负责人
                </th>
                <th data-field="school_subject_quota">
                  限额
                </th>
                <th data-field="apply_num">
                    已报名人数
                </th>
                <th data-field="schoolsId" data-formatter="schoolActionCol" data-events="schoolActionEvents">
                    操作
                </th> 
              </tr>
          </thead>
      </table>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="add-new-competition-modal" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">增加比赛</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label text-right">比赛年度：</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="active_year" id="active_year" required="" value="2020">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label text-right">比赛名称：</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="competition_title" id="competition_title" required="" value="长沙市中小学校园文化艺术节绘画、书法、摄影比赛">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label text-right">比赛主题：</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="competition_theme" id="competition_theme" value="阳光下成长" required="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label text-right">报名日期：</label>
          <div class="col-sm-9">
            <input type="date" class="form-control" name="apply_date" id="apply_date" required="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label text-right">报名结束日期：</label>
          <div class="col-sm-9">
            <input type="date" class="form-control" name="end_date" id="end_date" required="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label text-right">活动开始日期：</label>
          <div class="col-sm-9">
            <input type="date" class="form-control" name="active_start_date" id="active_start_date" required="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label text-right">活动结束日期：</label>
          <div class="col-sm-9">
            <input type="date" class="form-control" name="active_end_date" id="active_end_date" required="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label text-right">比赛通知文件：</label>
          <div class="col-sm-9">
            <input type="file" class="form-control" name="notice_file_url" id="notice_file_url" required="">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="submit-add-competition">提交</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
    <link href="/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="/js/fileinput.min.js"></script>
    <script src="/js/locales/zh.js"></script>
    <script src="/js/subject/school/index.js?v={{rand()}}"></script>
@endsection
