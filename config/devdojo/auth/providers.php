<?php

return [
    'facebook' => [
        'name' => 'Facebook',
        'scopes' => null,
        'parameters' => null,
        'stateless' => true,
        'active' => false,
        'socialite' => true,
        'svg' => '<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"><path fill="#0866FF" d="M48 24C48 10.745 37.255 0 24 0S0 10.745 0 24c0 11.255 7.75 20.7 18.203 23.293V31.334h-4.95V24h4.95v-3.16c0-8.169 3.697-11.955 11.716-11.955 1.521 0 4.145.298 5.218.596v6.648c-.566-.06-1.55-.09-2.773-.09-3.935 0-5.455 1.492-5.455 5.367V24h7.84L33.4 31.334H26.91v16.49C38.793 46.39 48 36.271 48 24H48Z"/><path fill="#fff" d="M33.4 31.334 34.747 24h-7.84v-2.594c0-3.875 1.521-5.366 5.457-5.366 1.222 0 2.206.03 2.772.089V9.481c-1.073-.299-3.697-.596-5.218-.596-8.02 0-11.716 3.786-11.716 11.955V24h-4.95v7.334h4.95v15.96a24.042 24.042 0 0 0 8.705.53v-16.49H33.4Z"/></svg>',
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
    ],
    'twitter' => [
        'name' => 'Twitter',
        'scopes' => null,
        'parameters' => null,
        'stateless' => true,
        'active' => false,
        'socialite' => true,
        'svg' => '<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"><path fill="#000" d="M36.653 3.808H43.4L28.66 20.655 46 43.58H32.422L21.788 29.676 9.62 43.58H2.869l15.766-18.02L2 3.808h13.922l9.613 12.709 11.118-12.71ZM34.285 39.54h3.738L13.891 7.634H9.879l24.406 31.907Z"/></svg>',
        'client_id' => env('TWITTER_CLIENT_ID'),
        'client_secret' => env('TWITTER_CLIENT_SECRET'),
    ],
    'linkedin' => [
        'name' => 'LinkedIn',
        'scopes' => null,
        'parameters' => null,
        'stateless' => true,
        'active' => false,
        'socialite' => true,
        'svg' => '<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"><path fill="#0A66C2" d="M44.457 0H3.543A3.543 3.543 0 0 0 0 3.543v40.914A3.543 3.543 0 0 0 3.543 48h40.914A3.543 3.543 0 0 0 48 44.457V3.543A3.543 3.543 0 0 0 44.457 0Zm-30.15 40.89H7.09V17.967h7.217V40.89Zm-3.614-26.1a4.143 4.143 0 1 1 4.167-4.14 4.083 4.083 0 0 1-4.167 4.14Zm30.214 26.12h-7.214V28.387c0-3.694-1.57-4.834-3.596-4.834-2.14 0-4.24 1.614-4.24 4.927v12.43H18.64V17.983h6.94v3.177h.093c.697-1.41 3.137-3.82 6.86-3.82 4.027 0 8.377 2.39 8.377 9.39l-.003 14.18Z"/></svg>',
        'client_id' => env('LINKEDIN_CLIENT_ID'),
        'client_secret' => env('LINKEDIN_CLIENT_SECRET'),
    ],
    'google' => [
        'name' => 'Google',
        'scopes' => null,
        'parameters' => null,
        'stateless' => true,
        'active' => true,
        'socialite' => true,
        'svg' => '<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"><path fill="#4285F4" d="M24 19.636v9.295h12.916c-.567 2.989-2.27 5.52-4.822 7.222l7.79 6.043c4.537-4.188 7.155-10.341 7.155-17.65 0-1.702-.152-3.339-.436-4.91H24Z"/><path fill="#34A853" d="m10.55 28.568-1.757 1.345-6.219 4.843C6.524 42.59 14.617 48 24 48c6.48 0 11.913-2.138 15.884-5.804l-7.79-6.043c-2.138 1.44-4.865 2.313-8.094 2.313-6.24 0-11.541-4.211-13.44-9.884l-.01-.014Z"/><path fill="#FBBC05" d="M2.574 13.244A23.704 23.704 0 0 0 0 24c0 3.883.938 7.527 2.574 10.756 0 .022 7.986-6.196 7.986-6.196A14.384 14.384 0 0 1 9.796 24c0-1.593.284-3.12.764-4.56l-7.986-6.196Z"/><path fill="#EA4335" d="M24 9.556c3.534 0 6.676 1.222 9.185 3.579l6.873-6.873C35.89 2.378 30.48 0 24 0 14.618 0 6.523 5.39 2.574 13.244l7.986 6.196c1.898-5.673 7.2-9.884 13.44-9.884Z"/></svg>',
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
    ],
    'github' => [
        'name' => 'Github',
        'scopes' => null,
        'parameters' => null,
        'stateless' => true,
        'active' => false,
        'socialite' => true,
        'svg' => '<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"><path fill="#24292F" fill-rule="evenodd" d="M24.02 0C10.738 0 0 10.817 0 24.198 0 34.895 6.88 43.95 16.424 47.154c1.193.241 1.63-.52 1.63-1.161 0-.561-.039-2.484-.039-4.488-6.682 1.443-8.073-2.884-8.073-2.884-1.074-2.805-2.665-3.525-2.665-3.525-2.187-1.483.16-1.483.16-1.483 2.425.16 3.698 2.484 3.698 2.484 2.147 3.686 5.607 2.644 7 2.003.198-1.562.834-2.644 1.51-3.245-5.329-.56-10.936-2.644-10.936-11.939 0-2.644.954-4.807 2.466-6.49-.239-.6-1.074-3.085.239-6.41 0 0 2.028-.641 6.6 2.484 1.959-.53 3.978-.8 6.006-.802 2.028 0 4.095.281 6.005.802 4.573-3.125 6.601-2.484 6.601-2.484 1.313 3.325.477 5.81.239 6.41 1.55 1.683 2.465 3.846 2.465 6.49 0 9.295-5.607 11.338-10.976 11.94.876.76 1.63 2.202 1.63 4.486 0 3.245-.039 5.85-.039 6.65 0 .642.438 1.403 1.63 1.163C41.12 43.949 48 34.895 48 24.198 48.04 10.817 37.262 0 24.02 0Z" clip-rule="evenodd"/></svg>',
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
    ],
    'gitlab' => [
        'name' => 'GitLab',
        'scopes' => null,
        'parameters' => null,
        'stateless' => true,
        'active' => false,
        'socialite' => true,
        'svg' => '<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 49" fill="none"><path fill="#E24329" d="m47.201 20.094-.068-.172L40.6 2.872a1.703 1.703 0 0 0-1.689-1.07c-.357.019-.7.147-.982.367a1.75 1.75 0 0 0-.58.88l-4.411 13.496H15.075L10.664 3.05a1.715 1.715 0 0 0-.58-.882 1.75 1.75 0 0 0-2-.108 1.717 1.717 0 0 0-.672.81L.866 19.912l-.065.172a12.132 12.132 0 0 0 4.024 14.021l.023.018.06.043 9.952 7.452 4.924 3.727 2.999 2.264a2.017 2.017 0 0 0 2.44 0l2.998-2.264 4.924-3.727 10.012-7.498.025-.02a12.137 12.137 0 0 0 4.019-14.006Z"/><path fill="#FC6D26" d="m47.201 20.094-.068-.172a22.071 22.071 0 0 0-8.785 3.949L24 34.72c4.886 3.696 9.14 6.907 9.14 6.907l10.012-7.498.025-.02a12.137 12.137 0 0 0 4.024-14.016Z"/><path fill="#FCA326" d="m14.86 41.628 4.924 3.727 2.999 2.264a2.017 2.017 0 0 0 2.44 0l2.998-2.264 4.924-3.727S28.886 38.407 24 34.72c-4.886 3.687-9.14 6.908-9.14 6.908Z"/><path fill="#FC6D26" d="M9.649 23.87a22.042 22.042 0 0 0-8.783-3.958l-.065.172a12.132 12.132 0 0 0 4.024 14.021l.023.018.06.043 9.952 7.452L24 34.71 9.649 23.87Z"/></svg>',
        'client_id' => env('GITLAB_CLIENT_ID'),
        'client_secret' => env('GITLAB_CLIENT_SECRET'),
    ],
    'bitbucket' => [
        'name' => 'Bitbucket',
        'scopes' => null,
        'parameters' => null,
        'stateless' => true,
        'active' => false,
        'socialite' => true,
        'svg' => '<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"><g><path fill="#2684FF" d="M1.538 3.32A1.538 1.538 0 0 0 0 5.104l6.529 39.633a2.091 2.091 0 0 0 2.045 1.746h31.32a1.538 1.538 0 0 0 1.539-1.292l6.529-40.08a1.536 1.536 0 0 0-1.538-1.783L1.538 3.32Zm27.491 28.645h-9.997l-2.706-14.142H31.45L29.03 31.965Z"/><path fill="url(#bitbucket-gradient)" d="M45.885 17.823H31.452l-2.423 14.142h-9.997L7.228 45.975c.375.324.852.504 1.346.508h31.329a1.538 1.538 0 0 0 1.538-1.292l4.444-27.368Z"/></g><defs><linearGradient id="bitbucket-gradient" x1="49.223" x2="25.369" y1="21.783" y2="40.4" gradientUnits="userSpaceOnUse"><stop offset=".18" stop-color="#0052CC"/><stop offset="1" stop-color="#2684FF"/></linearGradient></defs></svg>',
        'client_id' => env('BITBUCKET_CLIENT_ID'),
        'client_secret' => env('BITBUCKET_CLIENT_SECRET'),
    ],
    'slack' => [
        'name' => 'Slack',
        'scopes' => null,
        'parameters' => null,
        'stateless' => true,
        'active' => false,
        'socialite' => true,
        'svg' => '<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 49" fill="none"><path fill="#E01E5A" d="M10.28 31.15a4.984 4.984 0 0 1-4.989 4.988A4.984 4.984 0 0 1 .302 31.15c0-2.759 2.23-4.989 4.99-4.989h4.988v4.99Zm2.495 0c0-2.76 2.23-4.99 4.989-4.99a4.984 4.984 0 0 1 4.989 4.99v12.472c0 2.759-2.23 4.989-4.99 4.989a4.984 4.984 0 0 1-4.988-4.99V31.15Z"/><path fill="#36C5F0" d="M17.764 11.118a4.984 4.984 0 0 1-4.99-4.99c0-2.758 2.23-4.988 4.99-4.988 2.759 0 4.989 2.23 4.989 4.989v4.989h-4.99Zm0 2.532c2.759 0 4.989 2.23 4.989 4.989 0 2.76-2.23 4.989-4.99 4.989H5.254a4.984 4.984 0 0 1-4.988-4.989 4.984 4.984 0 0 1 4.989-4.989h12.51Z"/><path fill="#2EB67D" d="M37.758 18.639a4.984 4.984 0 0 1 4.988-4.989 4.984 4.984 0 0 1 4.99 4.989c0 2.76-2.23 4.989-4.99 4.989h-4.989v-4.989Zm-2.495 0c0 2.76-2.23 4.989-4.989 4.989a4.984 4.984 0 0 1-4.989-4.989V6.129c0-2.76 2.23-4.99 4.989-4.99 2.76 0 4.989 2.23 4.989 4.99v12.51Z"/><path fill="#ECB22E" d="M30.274 38.633c2.76 0 4.989 2.23 4.989 4.989s-2.23 4.989-4.989 4.989a4.984 4.984 0 0 1-4.989-4.99v-4.988h4.989Zm0-2.495a4.984 4.984 0 0 1-4.989-4.989c0-2.759 2.23-4.989 4.989-4.989h12.51c2.76 0 4.99 2.23 4.99 4.99a4.984 4.984 0 0 1-4.99 4.988h-12.51Z"/></svg>',
        'client_id' => env('SLACK_CLIENT_ID'),
        'client_secret' => env('SLACK_CLIENT_SECRET'),
    ],
    'apple' => [
        'name' => 'Apple',
        'scopes' => null,
        'parameters' => null,
        'stateless' => true,
        'active' => false,
        'socialite' => false,
        'svg' => '<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"><path fill="#000" d="M43.584 37.407a26.1 26.1 0 0 1-2.58 4.64c-1.358 1.935-2.469 3.274-3.325 4.018-1.327 1.22-2.75 1.846-4.273 1.881-1.093 0-2.411-.311-3.946-.942-1.54-.628-2.955-.94-4.249-.94-1.357 0-2.812.312-4.369.94-1.559.63-2.815.96-3.775.992-1.46.063-2.916-.58-4.37-1.931-.927-.81-2.086-2.196-3.476-4.16-1.491-2.098-2.717-4.53-3.677-7.304C4.516 31.606 4 28.705 4 25.897c0-3.217.695-5.991 2.087-8.316 1.095-1.868 2.55-3.34 4.372-4.422a11.761 11.761 0 0 1 5.91-1.668c1.16 0 2.681.359 4.572 1.064 1.885.707 3.095 1.066 3.626 1.066.396 0 1.741-.42 4.02-1.256 2.156-.776 3.975-1.097 5.465-.97 4.039.326 7.073 1.918 9.09 4.786-3.611 2.188-5.398 5.253-5.362 9.185.032 3.063 1.143 5.612 3.327 7.635.99.94 2.095 1.665 3.324 2.181a35.927 35.927 0 0 1-.847 2.225ZM34.322.961c0 2.4-.877 4.642-2.625 6.716-2.11 2.467-4.661 3.892-7.428 3.667a7.465 7.465 0 0 1-.056-.91c0-2.304 1.003-4.77 2.785-6.787.89-1.021 2.02-1.87 3.392-2.547C31.76.433 33.054.064 34.272 0c.035.321.05.642.05.96Z"/></svg>',
        'client_id' => env('APPLE_CLIENT_ID'),
        'client_secret' => env('APPLE_CLIENT_SECRET'),
    ],
    'microsoft' => [
        'name' => 'Microsoft',
        'scopes' => null,
        'parameters' => null,
        'stateless' => true,
        'active' => false,
        'socialite' => false,
        'svg' => '<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"><path fill="#F35325" d="M2.087 2.087h20.87v20.87H2.086V2.086Z"/><path fill="#81BC06" d="M25.044 2.087h20.869v20.87h-20.87V2.086Z"/><path fill="#05A6F0" d="M2.087 25.044h20.87v20.869H2.086v-20.87Z"/><path fill="#FFBA08" d="M25.044 25.044h20.869v20.869h-20.87v-20.87Z"/></svg>',
        'client_id' => env('MICROSOFT_CLIENT_ID'),
        'client_secret' => env('MICROSOFT_CLIENT_SECRET'),
    ],
    'pinterest' => [
        'name' => 'Pinterest',
        'scopes' => null,
        'parameters' => null,
        'stateless' => true,
        'active' => false,
        'socialite' => false,
        'svg' => '<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"><path fill="#fff" d="M24 48c13.255 0 24-10.745 24-24S37.255 0 24 0 0 10.745 0 24s10.745 24 24 24Z"/><path fill="#E60019" d="M24 0C10.746 0 0 10.746 0 24c0 10.173 6.321 18.864 15.25 22.36-.218-1.896-.396-4.82.078-6.893.435-1.877 2.805-11.931 2.805-11.931s-.71-1.442-.71-3.556c0-3.338 1.935-5.827 4.345-5.827 2.054 0 3.042 1.54 3.042 3.378 0 2.054-1.304 5.136-1.995 8-.573 2.39 1.205 4.346 3.555 4.346 4.267 0 7.546-4.504 7.546-10.983 0-5.748-4.128-9.758-10.034-9.758-6.835 0-10.845 5.116-10.845 10.41 0 2.054.79 4.266 1.778 5.471a.714.714 0 0 1 .158.692c-.178.75-.593 2.39-.672 2.726-.098.434-.355.533-.81.316-3.002-1.403-4.879-5.768-4.879-9.304 0-7.565 5.492-14.519 15.862-14.519 8.316 0 14.795 5.926 14.795 13.867 0 8.277-5.215 14.933-12.444 14.933-2.43 0-4.721-1.264-5.492-2.765l-1.5 5.709c-.534 2.093-1.996 4.7-2.984 6.3a24.104 24.104 0 0 0 7.111 1.067c13.255 0 24-10.745 24-24C48 10.747 37.255 0 24 0Z"/></svg>',
        'client_id' => env('PINTEREST_CLIENT_ID'),
        'client_secret' => env('PINTEREST_CLIENT_SECRET'),
    ],
    'reddit' => [
        'name' => 'Reddit',
        'scopes' => null,
        'parameters' => null,
        'stateless' => true,
        'active' => false,
        'socialite' => false,
        'svg' => '<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"><path fill="#FF4500" d="M24 0C10.746 0 0 10.746 0 24a23.925 23.925 0 0 0 7.03 16.97l-4.572 4.572C1.551 46.449 2.194 48 3.476 48H24c13.254 0 24-10.746 24-24S37.254 0 24 0Z"/><path fill="#fff" d="M37.605 28.789a5.604 5.604 0 1 0 0-11.209 5.604 5.604 0 0 0 0 11.209ZM10.395 28.789a5.604 5.604 0 1 0 0-11.209 5.604 5.604 0 0 0 0 11.209Z"/><path fill="#fff" d="M24.013 40c8.836 0 16-5.373 16-12 0-6.628-7.164-12-16-12s-16 5.372-16 12c0 6.627 7.164 12 16 12Z"/><path fill="#842123" d="M19.282 26.833c-.093 2.033-1.443 2.771-3.013 2.771-1.569 0-2.769-1.04-2.675-3.073.094-2.032 1.444-3.378 3.013-3.378 1.57 0 2.77 1.648 2.675 3.68ZM34.432 26.53c.094 2.032-1.104 3.072-2.675 3.072-1.571 0-2.921-.736-3.013-2.77-.094-2.033 1.104-3.681 2.675-3.681 1.572 0 2.922 1.344 3.013 3.378Z"/><path fill="#FD4401" d="M28.744 27.01c.088 1.902 1.35 2.592 2.82 2.592 1.47 0 2.591-1.033 2.503-2.936-.088-1.903-1.35-3.148-2.82-3.148-1.47 0-2.591 1.588-2.503 3.491ZM19.284 27.01c-.088 1.902-1.35 2.592-2.82 2.592-1.47 0-2.59-1.033-2.503-2.936.088-1.903 1.35-3.148 2.82-3.148 1.47 0 2.591 1.588 2.503 3.491Z"/><path fill="#BBCFDA" d="M24.013 30.96c-1.984 0-3.885.096-5.644.27a.444.444 0 0 0-.375.61c.985 2.308 3.308 3.93 6.02 3.93 2.71 0 5.032-1.623 6.018-3.93a.443.443 0 0 0-.375-.61 57.525 57.525 0 0 0-5.644-.27Z"/><path fill="#fff" d="M24.013 31.4c-1.978 0-3.874.098-5.627.276a.45.45 0 0 0-.373.619 6.502 6.502 0 0 0 11.998 0 .45.45 0 0 0-.373-.619 55.963 55.963 0 0 0-5.627-.275h.002Z"/><path fill="#2B2B2B" d="M24.013 31.172c-1.946 0-3.812.095-5.539.27a.444.444 0 0 0-.367.61 6.402 6.402 0 0 0 11.813 0 .444.444 0 0 0-.368-.61 55.38 55.38 0 0 0-5.539-.27Z"/><path fill="#fff" d="M32.777 14.368a3.971 3.971 0 1 0 0-7.942 3.971 3.971 0 0 0 0 7.942Z"/><path fill="url(#b)" d="M23.957 16.506c-.476 0-.86-.2-.86-.507a6.459 6.459 0 0 1 6.451-6.452.86.86 0 1 1 0 1.722 4.736 4.736 0 0 0-4.73 4.73c0 .308-.387.507-.861.507Z"/><path fill="#FF6101" d="M18.238 27.95c0 .738-.784 1.067-1.75 1.067-.965 0-1.749-.33-1.749-1.066 0-.737.784-1.334 1.75-1.334.965 0 1.75.597 1.75 1.334ZM33.289 27.95c0 .738-.784 1.067-1.75 1.067-.965 0-1.749-.33-1.749-1.066 0-.737.784-1.334 1.75-1.334.965 0 1.749.597 1.749 1.334Z"/><path fill="#FFC49C" d="M17.696 25.952c.344 0 .623-.304.623-.679 0-.375-.279-.679-.623-.679s-.622.304-.622.68c0 .374.278.678.622.678ZM32.492 25.952c.344 0 .622-.304.622-.679 0-.375-.278-.679-.622-.679s-.623.304-.623.68c0 .374.28.678.623.678Z"/></svg>',
        'client_id' => env('REDDIT_CLIENT_ID'),
        'client_secret' => env('REDDIT_CLIENT_SECRET'),
    ],
    'tiktok' => [
        'name' => 'TikTok',
        'scopes' => null,
        'parameters' => null,
        'stateless' => true,
        'active' => false,
        'socialite' => false,
        'svg' => '<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"><path fill="#FF004F" d="M34.353 17.327a18.724 18.724 0 0 0 10.952 3.517v-7.887c-.773 0-1.544-.08-2.3-.241v6.208a18.727 18.727 0 0 1-10.952-3.517v16.095c0 8.051-6.504 14.578-14.526 14.578a14.42 14.42 0 0 1-8.087-2.466A14.457 14.457 0 0 0 19.826 48c8.023 0 14.527-6.527 14.527-14.578V17.327ZM37.19 9.37a11.012 11.012 0 0 1-2.837-6.436V1.92h-2.18a11.043 11.043 0 0 0 5.017 7.45ZM14.514 37.436a6.657 6.657 0 0 1-1.355-4.038c0-3.682 2.975-6.668 6.645-6.668.684 0 1.364.105 2.015.313V18.98c-.761-.105-1.53-.15-2.299-.133v6.276a6.63 6.63 0 0 0-2.016-.313c-3.67 0-6.645 2.986-6.645 6.669a6.67 6.67 0 0 0 3.655 5.957Z"/><path fill="#000" d="M32.053 15.407a18.727 18.727 0 0 0 10.952 3.517v-6.208A10.984 10.984 0 0 1 37.19 9.37a11.043 11.043 0 0 1-5.017-7.45h-5.725v31.501c-.013 3.673-2.983 6.646-6.645 6.646a6.627 6.627 0 0 1-5.29-2.631 6.67 6.67 0 0 1-3.655-5.957c0-3.683 2.975-6.668 6.645-6.668.703 0 1.381.11 2.017.312v-6.276C11.638 19.01 5.3 25.473 5.3 33.42c0 3.968 1.578 7.565 4.14 10.193a14.421 14.421 0 0 0 8.087 2.466c8.022 0 14.526-6.527 14.526-14.578V15.407Z"/><path fill="#00F2EA" d="M43.005 12.716v-1.679A10.921 10.921 0 0 1 37.19 9.37a10.975 10.975 0 0 0 5.815 3.346ZM32.173 1.92c-.052-.3-.092-.602-.12-.906V0h-7.905v31.502c-.013 3.671-2.982 6.645-6.645 6.645a6.598 6.598 0 0 1-2.99-.711 6.627 6.627 0 0 0 5.29 2.631c3.662 0 6.632-2.973 6.645-6.646V1.92h5.725ZM19.52 18.847V17.06a14.62 14.62 0 0 0-1.993-.136C9.504 16.924 3 23.451 3 31.502c0 5.047 2.556 9.495 6.44 12.112A14.555 14.555 0 0 1 5.3 33.421c0-7.948 6.339-14.41 14.22-14.574Z"/></svg>',
        'client_id' => env('TIKTOK_CLIENT_ID'),
        'client_secret' => env('TIKTOK_CLIENT_SECRET'),
    ],
    'twitch' => [
        'name' => 'Twitch',
        'scopes' => null,
        'parameters' => null,
        'stateless' => true,
        'active' => false,
        'socialite' => false,
        'svg' => '<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"><path fill="#fff" d="m41.144 22.286-6.857 6.857H27.43l-6 6v-6h-7.714V3.429h27.428v18.857Z"/><path fill="#9146FF" d="M12.002 0 3.43 8.571V39.43h10.286V48l8.571-8.571h6.857L44.573 24V0H12Zm29.142 22.286-6.857 6.857H27.43l-6 6v-6h-7.714V3.429h27.428v18.857Z"/><path fill="#9146FF" d="M36.001 9.429h-3.428v10.285H36V9.43ZM26.573 9.429h-3.429v10.285h3.429V9.43Z"/></svg>',
        'client_id' => env('TWITCH_CLIENT_ID'),
        'client_secret' => env('TWITCH_CLIENT_SECRET'),
    ],
];
