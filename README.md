# Video-XH
The plugin for CMSimple-XH offers an simple way to include videos from YouTube or Vimeo. The created iFrame is responsive and changes the maximal size of the video frame to fit the screen with.

## Backend
In the settins the basic player uris are set to the standard paths for YouTube and Vimeo. 

## Usage
To show a video on a CMSimple-XH page a simple plugin call has to be placed in a page. The parameter consists of the platform name and the video id:

{{{video("youtube:xyz1234");}}}
{{{video("vimeo:1234567")}}}

The display size and position is controlled by the .plde_video class in the css file.