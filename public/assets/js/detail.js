$(document).ready(function () {

    $("#editModal").on('show.bs.modal', function (ev) {
        var modal = $(this);
        var link = $(ev.relatedTarget);
        var id = link.data('token');
        var url = link.data('url');
        var project_id = link.data('project');
        modal.find('#modalTitle').html('Edit Data');
        setTimeout(function () { 
            modal.find('.editLoader').css('display','none');
            modal.find('.editContent').css('display','block');
        },400);
        setTimeout(function () { 
            if(url == 'users'){
                modal.find('.editContent').load('/'+url+'/edit/' + id+'/'+project_id);
            }else{
                modal.find('.editContent').load('/'+url+'/edit/' + id);
            }
        },300);
        console.log('/'+url+'/edit/' + id);
    });
    $("#editModal").on('hide.bs.modal', function () {
        var modal = $(this);
        modal.find('.editLoader').css('display','block');
        modal.find('.editContent').css('display','none');
    });

    $("#detailModal").on('show.bs.modal', function (ev) {
        var modal = $(this);
        var link = $(ev.relatedTarget);
        var id = link.data('token');
        var url = link.data('url');
        modal.find('#modalTitle').html('Detail Data');
        setTimeout(function () { 
            modal.find('.infoLoader').css('display','none');
            modal.find('.infoContent').css('display','block');
        },400);
        setTimeout(function () { 
            modal.find('.infoContent').load('/'+url+'/detail/' + id);
        },300);
    });
    $("#detailModal").on('hide.bs.modal', function () {
        var modal = $(this);
        modal.find('.infoLoader').css('display','block');
        modal.find('.infoContent').css('display','none');
    });


    $("#deleteModal").on('show.bs.modal', function (ev) {
        var modal = $(this);
        var link = $(ev.relatedTarget);
        var id = link.data('token');
        var url = link.data('url');
        modal.find('#modalTitle').html('Delete Data');
        setTimeout(function () { 
            modal.find('.deleteLoader').css('display','none');
            modal.find('.deleteContent').css('display','block');
        },400);
        setTimeout(function () { 
            modal.find('.deleteContent').load('/'+url+'/delete/' + id);
        },300);
    });
    $("#deleteModal").on('hide.bs.modal', function () {
        var modal = $(this);
        modal.find('.deleteLoader').css('display','block');
        modal.find('.deleteContent').css('display','none');
    });

    $("#addModal").on('show.bs.modal', function (ev) {
        var modal = $(this);
        var link = $(ev.relatedTarget);
        var id = link.data('token');
        var url = link.data('url');
        modal.find('#modalTitle').html('Add New Data');
        setTimeout(function () { 
            modal.find('.addLoader').css('display','none');
            modal.find('.addContent').css('display','block');
        },400);
        setTimeout(function () { 
            modal.find('.addContent').load('/'+url+'/add/' + id);
        },300);
    });
    $("#addModal").on('hide.bs.modal', function () {
        var modal = $(this);
        modal.find('.addLoader').css('display','block');
        modal.find('.addContent').css('display','none');
    });

    $("#successModal").on('show.bs.modal', function (ev) {
        var modal = $(this);
        var link = $(ev.relatedTarget);
        var id = link.data('token');
        var url = link.data('url');
        modal.find('#modalTitle').html('Confirm');
        setTimeout(function () { 
            modal.find('.forumLoader').css('display','none');
            modal.find('.forumContent').css('display','block');
        },400);
        setTimeout(function () { 
            modal.find('.forumContent').load('/'+url+'/' + id);
        },300);
    });
    $("#successModal").on('hide.bs.modal', function () {
        var modal = $(this);
        modal.find('.forumLoader').css('display','block');
        modal.find('.forumContent').css('display','none');
    });
});