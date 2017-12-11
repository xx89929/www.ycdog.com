<div class="pt_services_show_nav ">
    <div class="services_classifys pull-left">
        <div class="services_classifys_tit pull-left text-center">
            <span>分类：</span>
        </div>
        <div class="services_classifys_tag pull-right">
            <ul class="list-inline">
                <li class="services_classifys_tags_active"><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li class="pull-right more_tag_button"><span>更多</span></li>
            </ul>
            <div class="services_classifys_tags_more">
                <div class="">
                    <ul class="list-inline">
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="services_classifys pull-left">
        <div class="services_classifys_tit pull-left text-center">
            <span>分类：</span>
        </div>
        <div class="services_classifys_tag pull-right">
            <ul class="list-inline">
                <li class="services_classifys_tags_active"><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li class="pull-right more_tag_button"><span>更多</span></li>
            </ul>
            <div class="services_classifys_tags_more">
                <div class="">
                    <ul class="list-inline">
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="services_classifys pull-left">
        <div class="services_classifys_tit pull-left text-center">
            <span>分类：</span>
        </div>
        <div class="services_classifys_tag pull-right">
            <ul class="list-inline">
                <li class="services_classifys_tags_active"><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li><a href="#">全部</a></li>
                <li class="pull-right more_tag_button"><span>更多</span></li>
            </ul>
            <div class="services_classifys_tags_more">
                <div class="">
                    <ul class="list-inline">
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">全部</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $('.more_tag_button').click(function () {
        if($(this).find('span').html() == '更多'){
            $(this).find('span').html('收起');
            $(this).parent().parent().find('.services_classifys_tags_more').toggle();
        }else{
            $(this).find('span').html('更多');
            $(this).parent().parent().find('.services_classifys_tags_more').toggle();
        }
    });

    $('.services_classifys_tag ul li').on('click',function () {
        $(this).addClass('services_classifys_tags_active').siblings().removeClass('services_classifys_tags_active');
    })
</script>