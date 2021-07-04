$(document).ready(function (){
    $.ajax({
        type: "GET",
        url: "get_from_db.php",
        success: function (result){
            displayComments(result);
        }
    })
})

$('#main-form').submit( function (event){
    event.preventDefault();
    let data = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "add_to_db.php",
        data: data,
        success: function (result){
            displayComments(result);
            resetForm(2000);
            addMessage('Сообщение успешно отправлено!');
            disableBtn(2000);
        }
    })

})

function displayComments(commentsStr){
    $('#comments').html('');
    let result = JSON.parse(commentsStr);

    result.forEach(function (item, index) {
        let oneComment = document.createElement('div');
        let oneCommentContainer = document.createElement('div')
        let nameBlock = document.createElement('div');
        let emailBlock = document.createElement('div');
        let commentBlock = document.createElement('div');

        oneCommentContainer.append(nameBlock);
        oneCommentContainer.append(emailBlock);
        oneCommentContainer.append(commentBlock);
        oneComment.append(oneCommentContainer);
        $('#comments').append(oneComment)

        oneComment.classList.add('one_comment', 'flex-column', 'd-flex', 'w-33', 'h-100');
        oneCommentContainer.classList.add('d-flex', 'flex-column', 'w-75', 'm-auto', 'mt-5', 'mb-5');
        if(index % 2 === 0){
            oneCommentContainer.classList.add('first');
        } else {
            oneCommentContainer.classList.add('second');
        }
        nameBlock.classList.add('pt-2', 'pb-2', 'user-name');
        nameBlock.innerText = item.name;
        emailBlock.classList.add('pt-3', 'pb-3', 'user-email');
        emailBlock.innerText = item.email;
        commentBlock.classList.add('pt-3', 'pb-3', 'user-comment');
        commentBlock.innerText = item.comment;

    })
}

function resetForm(ms){
    setTimeout(() => {
        $('#name').prop( "value", '' );
        $('#email').prop( "value", '' );
        $('#comment').prop( "value", '' );
    }, ms);
}

function addMessage(message){
    $('#dialog-window').html(message)
    setTimeout(() => {
        $('#dialog-window').html('');
    },2000);
}

function disableBtn(ms){
    $('#submit-btn').prop( "disabled", true );
    setTimeout(() => {
        $('#submit-btn').prop( "disabled", false );
    }, ms);
}