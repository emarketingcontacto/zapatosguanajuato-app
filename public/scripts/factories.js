function openAnswer(e) {
    //variables
    let questionId = e.currentTarget.id;
    let answerId = '';
    let openAnswer = '';
    let allAnswers = '';
    let iconSelected = '';
    let iconId = '';


    switch (questionId) {
        case 'question-1':
            openAnswer = document.getElementById('response-1');
            openAnswer.classList.toggle('ans-closed');
            answerId = 'response-1';
            iconSelected = document.getElementById('icon-faq-1');
            iconSelected.classList.toggle('active-icon');
            iconId = iconSelected.id;

        break;

        case 'question-2':
            openAnswer = document.getElementById('response-2');
            openAnswer.classList.toggle('ans-closed');
            answerId = 'response-2';
             iconSelected = document.getElementById('icon-faq-2');
            iconSelected.classList.toggle('active-icon');
            iconId = iconSelected.id;
        break

        case 'question-3':
            openAnswer = document.getElementById('response-3');
            openAnswer.classList.toggle('ans-closed');
            answerId = 'response-3';
             iconSelected = document.getElementById('icon-faq-3');
            iconSelected.classList.toggle('active-icon');
            iconId = iconSelected.id;
        break

        case 'question-4':
            openAnswer = document.getElementById('response-4');
            openAnswer.classList.toggle('ans-closed');
            answerId = 'response-4';
             iconSelected = document.getElementById('icon-faq-4');
            iconSelected.classList.toggle('active-icon');
            iconId = iconSelected.id;
            break

        case 'question-5':
            openAnswer = document.getElementById('response-5');
            openAnswer.classList.toggle('ans-closed');
            answerId = 'response-5'
             iconSelected = document.getElementById('icon-faq-5');
            iconSelected.classList.toggle('active-icon');
            iconId = iconSelected.id;
        break

        default:
            break;
    }

     // Cierra todas las respuestas abiertas
    allAnswers = document.querySelectorAll('.faq-answer');
    allAnswers.forEach(answer => {
        if (answer.id !== answerId) {
            answer.classList.add('ans-closed');
        }
    });

    //Regresa los icons
    allIcons = document.querySelectorAll('.bi-chevron-double-down');
    console.log(allIcons);
    allIcons.forEach(icon => {
        if (icon.id !== iconId) {
            icon.classList.remove('active-icon');
        }
    });
}
