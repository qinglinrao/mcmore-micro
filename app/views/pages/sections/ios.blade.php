<div id="main" class="platform-ios">
    <div class="platform-ios-wrap wrap">
        @include('public.breadcrumb')
        <div class="platform-a-title" id="platform-a-title">
            <h1>
                （苹果）IOS开发服务
            </h1>
        </div>
        <div class="h-block-sys" id="platform-item">
            <div class="sys-con clearfix">
                <div class="sys-left">
                    <h3>
                        了解
                        <b>
                            iOS
                        </b>
                        <span>
                            ABOUT iOS
                        </span>
                    </h3>
                    <div class="line">
                    </div>
                    <p>
                        iOS是由苹果公司开发的移动操作系统。苹果公司最早于2007年1月9日的Macworld大会上公布这个系统，最初是设计给iPhone使用的，后来陆续套用到iPod
                        touch、iPad以及Apple TV等产品上。iOS与苹果的Mac OS X操作系统一样，它也是以Darwin为基础的，因此同样属于类Unix的商业操作系统。原本这个系统名为iPhone
                        OS，因为iPad，iPhone，
                        <br/>
                        iPod touch都使用iPhone OS，所以2010WWDC大会上宣布改名为iOS。
                    </p>
                </div>
                <div class="sys-right">
                    <img class="type-img" src="/sunnsoft/images/p-ios01.png" alt="了解什么是IOS系统">
                </div>
            </div>
        </div>
        <div class="platform-advantage">
            <div class="subject-title">
                <h3>
                    IOS APP
                    <span>
                        3
                    </span>
                    大优势
                </h3>
                <p>
                    THE ADVANTAGES of iOS
                </p>
            </div>
            <div class="platform-subject-item">
                <div class="item-left">
                    <img src="/sunnsoft/images/p-ios02.png" alt="手机IOS APP应用软件的营收更容易">
                </div>
                <div class="item-right">
                    <h3>
                        IOS APP营收更容易
                        <span>
                            EASY REVENUES
                        </span>
                    </h3>
                    <div class="line">
                    </div>
                    <p>
                        iPhone的用户更倾向于为中意的 App 付费，一部分原因可能由于 iPhone 用户的确比较富足，另一部分原因则在于 iTunes 与信用卡之间的整合，其支付方式十分方便。
                        <br/>
                        相同的一个应用，同时在安卓与苹果平台上发布运营，其用户愿意进行消费的，基本整体倾向于苹果用户。
                    </p>
                </div>
            </div>
            <div class="platform-subject-item ">
                <div class="item-left  item-left02">
                    <img src="/sunnsoft/images/p-ios03.png" alt="IOS应用软件的发布比较统一，而且每个App应用是唯一的">
                </div>
                <div class="item-right">
                    <h3>
                        IOS应用发布统一也唯一
                        <span>
                            UNIFIED RELEAES
                        </span>
                    </h3>
                    <div class="line">
                    </div>
                    <p>
                        苹果用户想要在iphone、ipad、mac机上安装任何的应用，都只能在App Store应用商店中下载，用户在这里下载的所有记录和评论都为应用成为一个很好的背书，相对于安卓有海量的应用商店，而苹果的唯一性，很大程度的减少了用户找不少应用的问题，同时也减少了应用方在多平台上维护的费用。
                    </p>
                </div>
            </div>
            <div class="platform-subject-item">
                <div class="item-left item-left03">
                    <img src="/sunnsoft/images/p-ios04.png" alt="苹果IOS系统的机型比较少，而且该系统的适配性是最好的">
                </div>
                <div class="item-right">
                    <h3>
                        IOS系统机型少、适配性最优
                        <span>
                            HIGHLY ADAPTIVE
                        </span>
                    </h3>
                    <div class="line">
                    </div>
                    <p>
                        iPhone的用户更倾向于为中意的 App 付费，一部分原因可能由于 iPhone 用户的确比较富足，另一部分原因则在于 iTunes 与信用卡之间的整合，其支付方式十分方便。
                        <br/>
                        相同的一个应用，同时在安卓与苹果平台上发布运营，其用户愿意进行消费的，基本整体倾向于苹果用户。
                    </p>
                </div>
            </div>
            <div class="platform-ios-sec-bg">
            </div>
        </div>
        <div class="platform-question" id="platform-question">
            <div class="subject-title">
                <h3>
                    IOS APP 开发常见入门
                    <span>
                        问题
                    </span>
                </h3>
                <p>
                    THE QUESTIONS of iOS DEVELOPMENT
                </p>
            </div>
            <div class="platform-question-con">
                <div class="question-item">
                    <div class="question-item-wrap">
                        <h4>
                            iOS
                            <span>
                                入门
                            </span>
                            知识
                        </h4>
                        @include('pages.partials.item', ['items'=>$primer_recommends])
                    </div>
                </div>
                <div class="question-item left-btm">
                    <div class="question-item-wrap">
                        <h4>
                            iOS
                            <span>
                                开发入门
                            </span>
                            知识
                        </h4>
                        @include('pages.partials.item', ['items'=>$developer_primer_recommends])
                    </div>
                </div>
                <div class="question-item right">
                    <div class="question-item-wrap">
                        <h4>
                            iOS
                            <span>
                                运营
                            </span>
                            知识
                        </h4>
                        @include('pages.partials.item', ['items'=>$operate_recommends])
                    </div>
                </div>
            </div>
            <div class="question-bg">
            </div>
        </div>
        @include('pages.blocks.related')
    </div>
</div>