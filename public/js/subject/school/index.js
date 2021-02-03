$(document).ready(function() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

    $('#school-list').bootstrapTable({
          method: 'get', 
          url: "/subject/schoolsData",
          pagination:"true",
          pageList: [44, 50], 
          pageSize: 44,
          pageNumber: 1,
          toolbar:"#toolbar",
          queryParams: function(params) {
            var temp = { 
              districts_id : 1,
          };
          return temp;
          },
          clickToSelect: true,
          columns: [{  
                        checkbox: true  
                    }],
          responseHandler: function (res) {
            // console.log(res);
              return res;
          },
      });

    $("#add-new-btn").click(function(e) {
        $("#add-new-competition-modal").modal("show");
    });

    $("#submit-add-competition").click(function(e) {
        if("" == $("#school-name").val())
        {
            alert("姓名不能为空！");
        }
        console.log($("#active_year").val(), $("#competition_title").val(), $("#competition_theme").val());
        data = {
            'active_year': $("#active_year").val(),
            'competition_title': $("#competition_title").val(),
            'competition_theme': $("#competition_theme").val(),
            'apply_date': $("#apply_date").val(),
            'end_date': $("#end_date").val(),
            'active_start_date': $("#active_start_date").val(),
            'active_end_date': $("#active_end_date").val(),
            'notice_file_url': $("#notice_file_url").val(),
            'subjects_id': 1,
        }
        $.ajax({
            type: "post",
            url: '/subject/competitions',
            data: data,
            success: function( data ) {
                $("#add-new-competition-modal").modal("hide");
                $('#competition-list').bootstrapTable('refresh');
            }
        });
        // console.log($("#school-name").val());
        // console.log($("#gender").val());
        // console.log($("#add-new-btn").val());
    });
});

function dateCol(value, row, index) {
    return [
        '<span>'+value.substr(0, 10)+'</span>'
    ].join('');
}

function activeCol(value, row, index) {
    return [
        '<span>'+((1==value)?"是":"否")+'</span>'
    ].join('');
}

function classTitleCol(value, row, index) {
    return [
        "<span>" + row["enter_school_year"] + "级" + row["class_title"] + '班</span>'
    ].join('');
}

function resetCol(value, row, index) {
    return [
        '<a class="btn btn-info btn-sm reset" data-unique-id="', row.users_id, '">重置</a>'
    ].join('');
}

function schoolActionCol(value, row, index) {
    return [
        ' <a class="btn btn-danger btn-sm edit">编辑</a> '
    ].join('');
}

window.schoolActionEvents = {
    // 'click .lock': function(e, value, row, index) {
    //     // console.log(row);
    //     $.ajax({
    //         type: "POST",
    //         url: '/district/lockOneStudentAccount',
    //         data: {users_id: row.schoolsId},
    //         success: function( data ) {
    //             if("true" == data) {
    //                 alert(row.username+"已被锁定！")
    //             } else if ("false" == data) {
    //                 alert("锁定失败！")
    //             }
    //         }
    //     });
    // },
    // 'click .unlock': function(e, value, row, index) {
    //     // console.log(row);
    //     $.ajax({
    //         type: "POST",
    //         url: '/district/unlockOneStudentAccount',
    //         data: {users_id: row.schoolsId},
    //         success: function( data ) {
    //             if("true" == data) {
    //                 alert(row.username+"解锁成功！")
    //             } else if ("false" == data) {
    //                 alert("解锁失败！")
    //             }
    //         }
    //     });
    // },
    'click .edit': function(e, value, row, index) {
        console.log("click edit schools id "+row.schoolsId);
    },
    'click .del': function(e, value, row, index) {
        console.log("click delete schools id "+row.schoolsId);
    },
}
