@extends('layouts.app')

@section('content')
    <style>
        li {
            list-style-type: none;
        }
        .vertical-center {
          margin: 0;
          position: absolute;
          top: 50%;
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-6 text-center">
                <div class="vertical-center">
                    <h2>激发学生创意激情，提升教师带赛热情，优化组织比赛流程</h2>
                    <p>规范组织比赛流程，学校指导教师在线报名与学生基本信息核对，汇总数据，分析全区参赛情况</p>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <img src="/images/paint.png" width="400px" />
            </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="/images/manager.png" alt="Generic placeholder image" width="140" height="140">
            <h2>学科负责人</h2>
            <p>发布比赛，收集报名信息</p>
            <p>录入评奖结果，汇总评奖信息，发放奖状.</p>
            <p><a class="btn btn-secondary" href="{{ route('subject.login') }}" role="button">点击登入 »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="/images/teacher.png" alt="Generic placeholder image" width="140" height="140">
            <h2>指导教师</h2>
            <p>提交学校报名信息.</p>
            <p>核对参赛学生信息.</p>
            <p><a class="btn btn-secondary" href="{{ route('subject.login') }}" role="button">点击登入 »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="/images/student.png" alt="Generic placeholder image" width="140" height="140">
            <h2>学生入口</h2>
            <p>自主报名.</p>
            <p>查看获奖情况.</p>
            <p><a class="btn btn-secondary" href="{{ route('subject.login') }}" role="button">点击登入 »</a></p>
          </div><!-- /.col-lg-4 -->
        </div>
    </div>

@endsection

