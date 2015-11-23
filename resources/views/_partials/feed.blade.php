<div class="row">
    <div class="col-xs-12">
        <div class="user-question-wrap">
            <ul class="user-question-list">
                @if (count($content) > 0)
                    @foreach($content as $question)
                        <li class="user-question-list-item">
                            <div class="user-question-list-item-name"><span class="name">{{ $question->user->name }}</span> <span class="user-question-list-item-name-question">{{ $question->question }}</span></div>
                            <img src="/assets/img/avatars/{{ ltrim($question->user->face, '/') }}" alt="" class="user-question-list-item-avatar"/>

                            <div class="user-question-list-item-status"></div>
                            <div class="user-question-list-item-text">

                                <div class="quest_bl">
                                    <span class="us_question">{{ $question->question }}</span>&nbsp;
                                    <span class="us_best_answer">{{ $question->banswer }}</span>
                                    <span class="us_answer">{{ $question->answer }}</span>
                                </div>
                                <!--quest_bl-->

                                <button type="button" class="btn btn-default read-more">
                                    <i class="fa fa-caret-down"></i> Читать полностью
                                </button>
                            </div>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        <!--user-question-wrap-->
    </div>
</div>