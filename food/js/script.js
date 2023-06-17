// 브라우저 화면을 가리키는 객체 window. load 이벤트는 브라우저에 웹페이지가 로드되었을 때 
window.addEventListener('load', ()=>{
    // Isotope 객체 생성
    const grid = new Isotope('section', {  // Isotope 적용할 대상 엘리먼트, 옵션들
        itemSelector: 'article',  // 자바스크립트 객체의 속성(속성명 : 속성값)
        columnWidth: 'article',
        transitionDuration: '0.5s'
    });
    // 클릭할 버튼(실제는 리스트아이템)들을 가져오기
    const btns = document.querySelectorAll('main ul li'); // li 엘리먼트들
    for(let btn of btns) {
        btn.addEventListener('click', e=>{
            const sort = e.currentTarget.querySelector('a').getAttribute('sort'); // sort에 들어가는 값은 * .odd .even 임.
            grid.arrange({     // Isotope 객체를 이용해서 필터링
               filter: sort 
            });
            // 모든 버튼의 스타일을 제거
            for(let el of btns) {
                el.classList.remove('on');
            }
            // 현재 클릭한 버튼에 스타일 적용 
            e.currentTarget.classList.add('on');
        });
    }
});











