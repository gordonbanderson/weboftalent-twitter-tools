<% if $CanRenderTwitterCard %>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:site" content="$TwitterUsernameSite"/>
<meta name="twitter:creator" content="$TwitterUsernameCreator"/>
<meta name="twitter:title" content="$Title"/>
<meta name="twitter:description" content="$TwitterDescription"/>
<meta name="twitter:image" content="$TwitterImage.CroppedFocusedImage(1024,1024).AbsoluteURL"/>
<% end_if %>