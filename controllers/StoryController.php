<?php
require_once ROOT.'/models/Story.php';
class StoryController
{
    public function actionStory($id){

        $story = Story::addStory($id);

        require_once ROOT.'/viwes/story/story.php';
    }


}