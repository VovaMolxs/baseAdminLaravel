@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset
@php
$configData = Helper::appClasses();
@endphp

@isset($configData["layout"])
@include((( $configData["layout"] === 'horizontal') ? 'backend.layouts.horizontalLayout' :
(( $configData["layout"] === 'blank') ? 'backend.layouts.blankLayout' :
(($configData["layout"] === 'front') ? 'backend.layouts.layoutFront' : 'backend.layouts.contentNavbarLayout') )))
@endisset
