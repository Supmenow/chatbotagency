@extends('app')

@section('content')
    
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class='jumbotron'>
                        <h1 class="text-center">We are <u>the</u> Chatbot agency.</h1>
                        <p class="text-center lead">We build and integrate chatbots into Messenger, Slack, Twilio, Twitter and many more.</p>
                        <p class="text-center lead">We built the <em>FIRST</em> <a href="https://jcampbell05.github.io/BotKit/" target="_blank">Chatbot Framework</a> for you to develop with.</p>
                        <p class="text-center lead">Drop us a line and chat <a href="mailto:rich@wenow.co">rich@wenow.co</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class='process darkGrey'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">The Process</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <div class="boxContent">
                            <h1 class="text-center"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span></h1>
                            <p class="text-center"><strong>Design</strong></p>
                            <p  class="text-center">User flows to provide the best chat experience, use AI capabilities, and meet business goals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="boxContent">
                            <h1 class="text-center"><span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span></h1>
                            <p class="text-center"><strong>Build</strong></p>
                            <p>Build out the tech with AI and NLP capabilities. We can integrate with any platform, via our Swift 3 BotKit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="boxContent">
                            <h1 class="text-center"><span class="glyphicon glyphicon-education" aria-hidden="true"></span></h1>
                            <p class="text-center"><strong>Improve</strong></p>
                            <p class="text-center">Our experienced Bot trainers improve experiences, and identify new opportunities for automation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="examples lightGrey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">A simple example</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class='text-center'>
                        <img src="img/scrabbleBot.png" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">About chatbots</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p class="text-center"><strong>Access to Billions
</strong></p>
                    <p>Billions of consumers use messenger services every day, and starting a conversation on a messenger is much easier than signing up for an app or website.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about darkGrey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="text-center">
                        <a href="https://jcampbell05.github.io/BotKit/" target="_blank"><img src="https://jcampbell05.github.io/BotKit/Images/Logo.png"></a>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p class="text-center"><a href="https://jcampbell05.github.io/BotKit/" target="_blank">BotKit</a> is our Open Source Bot Framework that brings together integration (Slack, Messenger, Twilio etc) with Routing (NLP) and Logic (How you want to reply to a given command).</p>

                </div>
            </div>
        </div>
    </section>


@endsection