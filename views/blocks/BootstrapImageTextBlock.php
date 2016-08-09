<? if (isset($vars['imagePosition'])): ?>
    <div class="clearfix image-text">
        <? if ($vars['imagePosition'] == 'left'): ?>
            <div class="image-text__wrapper">
                <div class="col-sm-12 p-a-0">
                    <div class="image-text__wrapper__image hidden-xs-down" style="float:left;<? if (isset($cfgs['imageWidth'])):?>width: <?= $cfgs['imageWidth']?>; <? endif ?> max-width:100%;">
                        <img src="<?= $extras['imageId']['source'] ?>" style="padding-right:10px;" alt="<?= $vars['imageCaption'] ?>" class="img-fluid <?= $vars['imageShapes'] ?>"/>
                        <? if (isset($vars['imageCaption']) && (!empty($vars['imageCaption']))): ?>
                            <div class="image-text__wrapper__image__caption <? if (isset($cfgs['imageCaptionVisibility']) && ($cfgs['imageCaptionVisibility'] == 0)): ?>  hidden-xs-up <? endif ?>" style="padding-right:10px;">
                                <?= $vars['imageCaption'] ?>
                            </div>
                        <? endif ?>
                    </div>
                    <?= $extras['text'] ?>
                    <div class="image-text__wrapper_small hidden-sm-up">
                        <img src="<?= $extras['imageId']['source'] ?>" alt="<? if (isset($vars['imageCaption']) && (!empty($vars['imageCaption']))): ?> <?= $vars['imageCaption'] ?> <? endif ?>" style="margin:auto; padding-top:10px;" class="img-fluid <?= $vars['imageShapes'] ?>"/>
                        <? if (isset($vars['imageCaption']) && (!empty($vars['imageCaption']))): ?>
                            <div class="image-text__wrapper__image__caption <? if (isset($cfgs['imageCaptionVisibility']) && ($cfgs['imageCaptionVisibility'] == 0)): ?>  hidden-xs-up <? endif ?>">
                                <?= $vars['imageCaption'] ?>
                            </div>
                        <? endif ?>
                    </div>
                </div>
            </div>
        <? elseif ($vars['imagePosition'] == 'right'): ?>
            <div class="image-text__wrapper">
                <div class="col-sm-12 p-a-0">
                    <div class="image-text__wrapper__image hidden-xs-down" style="float:right;<? if (isset($cfgs['imageWidth'])):?>width: <?= $cfgs['imageWidth']?>; <? endif ?> max-width:100%;">
                        <img src="<?= $extras['imageId']['source'] ?>" style="padding-left: 10px;" alt="<? if (isset($vars['imageCaption']) && (!empty($vars['imageCaption']))): ?> <?= $vars['imageCaption'] ?> <? endif ?>" class="img-fluid <?= $vars['imageShapes'] ?>"/>
                        <? if (isset($vars['imageCaption']) && (!empty($vars['imageCaption']))): ?>
                            <div class="image-text__wrapper__image__caption <? if (isset($cfgs['imageCaptionVisibility']) && ($cfgs['imageCaptionVisibility'] == 0)): ?>  hidden-xs-up <? endif ?>" style="padding-left:10px;" >
                                <?= $vars['imageCaption'] ?>
                            </div>
                        <? endif ?>
                    </div>
                    <?= $extras['text'] ?>
                    <div class="image-text__wrapper_small hidden-sm-up">
                        <img src="<?= $extras['imageId']['source'] ?>" alt="<? if (isset($vars['imageCaption']) && (!empty($vars['imageCaption']))): ?> <?= $vars['imageCaption'] ?> <? endif ?>" style="margin:auto; padding-top:10px;" class="img-fluid <?= $vars['imageShapes'] ?>"/>
                        <? if (isset($vars['imageCaption']) && (!empty($vars['imageCaption']))): ?>
                            <div class="image-text__wrapper__image__caption <? if (isset($cfgs['imageCaptionVisibility']) && ($cfgs['imageCaptionVisibility'] == 0)): ?>  hidden-xs-up <? endif ?>">
                                <?= $vars['imageCaption'] ?>
                            </div>
                        <? endif ?>
                    </div>

                </div>
            </div>
        <? endif; ?>
    </div>
<? endif; ?>