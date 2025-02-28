<div class="modal fade" id="post-modal" tabindex="-1"  aria-labelledby="post-modalLabel" aria-hidden="true" >
    <div class="modal-dialog  modal-lg modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                <button type="button" class="btn-close btn shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex align-items-center border-bottom pb-3 mb-4">
                    <div class="user-img">
                        <img src="{{asset('modules/social-app/images/avatar/01.png')}}" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                    </div>
                    <form class="w-100" action="#">
                        <input type="text" class="form-control shadow-none border-0" placeholder="Write something here...">
                    </form>
                </div>
                <ul class="row flex-wrap align-items-center list-inline m-0 p-0">
                    <li class="col-md-6 mb-3">
                        <div class="bg-body rounded p-2 pointer">
                            <svg width="24" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9999 14.7024V16.0859C21.9999 16.3155 21.9899 16.5471 21.9699 16.7767C21.6893 19.9357 19.4949 22 16.3286 22H7.67126C6.06806 22 4.71535 21.4797 3.74341 20.5363C3.36265 20.1864 3.042 19.7753 2.7915 19.3041C3.12217 18.9021 3.49291 18.462 3.85363 18.0208C4.46485 17.289 5.05603 16.5661 5.42677 16.0959C5.97788 15.4142 7.43078 13.6196 9.44481 14.4617C9.85563 14.6322 10.2164 14.8728 10.547 15.0833C11.3586 15.6247 11.6993 15.7851 12.2705 15.4743C12.9017 15.1335 13.3125 14.4617 13.7434 13.76C13.9739 13.388 14.2043 13.0281 14.4548 12.6972C15.547 11.2736 17.2304 10.8926 18.6332 11.7348C19.3346 12.1559 19.9358 12.6872 20.4969 13.2276C20.6172 13.3479 20.7374 13.4592 20.8476 13.5695C20.9979 13.7198 21.4989 14.2211 21.9999 14.7024Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M16.3387 2H7.67134C4.27455 2 2 4.37607 2 7.91411V16.086C2 17.3181 2.28056 18.4119 2.79158 19.3042C3.12224 18.9022 3.49299 18.4621 3.85371 18.0199C4.46493 17.2891 5.05611 16.5662 5.42685 16.096C5.97796 15.4143 7.43086 13.6197 9.44489 14.4618C9.85571 14.6323 10.2164 14.8729 10.5471 15.0834C11.3587 15.6248 11.6994 15.7852 12.2705 15.4734C12.9018 15.1336 13.3126 14.4618 13.7435 13.759C13.9739 13.3881 14.2044 13.0282 14.4549 12.6973C15.5471 11.2737 17.2305 10.8927 18.6333 11.7349C19.3347 12.1559 19.9359 12.6873 20.497 13.2277C20.6172 13.348 20.7375 13.4593 20.8477 13.5696C20.998 13.7189 21.499 14.2202 22 14.7025V7.91411C22 4.37607 19.7255 2 16.3387 2Z" fill="currentColor"></path>
                                <path d="M11.4543 8.79668C11.4543 10.2053 10.2809 11.3783 8.87313 11.3783C7.46632 11.3783 6.29297 10.2053 6.29297 8.79668C6.29297 7.38909 7.46632 6.21509 8.87313 6.21509C10.2809 6.21509 11.4543 7.38909 11.4543 8.79668Z" fill="currentColor"></path>
                            </svg>
                            Photo/Video
                        </div>
                    </li>
                    <li class="col-md-6 mb-3">
                        <div class="bg-body rounded p-2 pointer">
                            <svg width="24" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z" fill="currentColor"></path>
                                <path d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z" fill="currentColor"></path>
                                <path d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z" fill="currentColor"></path>
                            </svg>
                            Tag Friend
                        </div>
                    </li>
                    <li class="col-md-6 mb-3">
                        <div class="bg-body rounded p-2 pointer">
                            <svg width="24" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.4" cx="12" cy="12" r="10" fill="currentColor"/>
                                <path d="M9.70986 9.39758C8.73513 8.42277 7.14907 8.42285 6.17435 9.39758C5.94188 9.63 5.94188 10.0069 6.17435 10.2394C6.40685 10.4718 6.78376 10.4718 7.01618 10.2394C7.52681 9.72879 8.35759 9.72883 8.86814 10.2394C8.98439 10.3556 9.13669 10.4138 9.289 10.4138C9.4413 10.4138 9.59369 10.3556 9.70986 10.2394C9.94232 10.0069 9.94232 9.63004 9.70986 9.39758Z" fill="currentColor"/>
                                <path d="M17.5719 9.39758C16.5972 8.42285 15.0111 8.42277 14.0364 9.39758C13.8039 9.63 13.8039 10.0069 14.0364 10.2394C14.2689 10.4718 14.6458 10.4718 14.8782 10.2394C15.3888 9.72879 16.2196 9.72875 16.7302 10.2394C16.8465 10.3556 16.9988 10.4138 17.1511 10.4138C17.3034 10.4138 17.4558 10.3556 17.5719 10.2394C17.8044 10.0069 17.8044 9.63004 17.5719 9.39758Z" fill="currentColor"/>
                                <path d="M17.151 12.4751H6.59548C6.26673 12.4751 6.00024 12.7416 6.00024 13.0703C6.00024 16.3087 8.63489 18.9433 11.8733 18.9433C15.1116 18.9433 17.7463 16.3087 17.7463 13.0703C17.7463 12.7416 17.4798 12.4751 17.151 12.4751ZM11.8733 17.7529C9.49286 17.7529 7.52161 15.9676 7.22837 13.6656H16.5182C16.2249 15.9676 14.2536 17.7529 11.8733 17.7529Z" fill="currentColor"/>
                            </svg> Feeling/Activity
                        </div>
                    </li>
                    <li class="col-md-6 mb-3">
                        <div class="bg-body rounded p-2 pointer">
                            <svg width="24" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.53162 2.93677C10.7165 1.66727 13.402 1.68946 15.5664 2.99489C17.7095 4.32691 19.012 6.70418 18.9998 9.26144C18.95 11.8019 17.5533 14.19 15.8075 16.0361C14.7998 17.1064 13.6726 18.0528 12.4488 18.856C12.3228 18.9289 12.1848 18.9777 12.0415 19C11.9036 18.9941 11.7693 18.9534 11.6508 18.8814C9.78243 17.6746 8.14334 16.134 6.81233 14.334C5.69859 12.8314 5.06584 11.016 5 9.13442C4.99856 6.57225 6.34677 4.20627 8.53162 2.93677ZM9.79416 10.1948C10.1617 11.1008 11.0292 11.6918 11.9916 11.6918C12.6221 11.6964 13.2282 11.4438 13.6748 10.9905C14.1214 10.5371 14.3715 9.92064 14.3692 9.27838C14.3726 8.29804 13.7955 7.41231 12.9073 7.03477C12.0191 6.65723 10.995 6.86235 10.3133 7.55435C9.63159 8.24635 9.42664 9.28872 9.79416 10.1948Z" fill="currentColor"></path>
                                <ellipse opacity="0.4" cx="12" cy="21" rx="5" ry="1" fill="currentColor"></ellipse>
                            </svg>
                            Check in
                        </div>
                    </li>
                    <li class="col-md-6 mb-3">
                        <div class="bg-body rounded p-2 pointer">
                            <svg width="28" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.4" x="1" y="6" width="22" height="12.7368" rx="1" fill="currentColor"/>
                                <path d="M4.47363 9.47363V15.2631H7.94732M9.68416 9.47363V15.2631M11.421 9.47363L13.1387 15.1993C13.1444 15.2183 13.1713 15.2183 13.177 15.1993L14.8947 9.47363M19.5263 15.2631H16.6315V12.5M19.5263 9.47363H16.6315V12.5M16.6315 12.5H19.5263" stroke="currentColor" stroke-linecap="round"/>
                            </svg>
                            Live Video
                        </div>
                    </li>
                    <li class="col-md-6 mb-3">
                        <div class="bg-body rounded p-2 pointer">
                            <svg width="24" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5036 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0463C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.299 9.012 20.0475 9.013C19.6247 9.016 19.1177 9.021 18.8088 9.021Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1742 7.55437 17.2802 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.97398 11.3877H12.359C12.77 11.3877 13.104 11.0547 13.104 10.6437C13.104 10.2327 12.77 9.89868 12.359 9.89868H8.97398C8.56298 9.89868 8.22998 10.2327 8.22998 10.6437C8.22998 11.0547 8.56298 11.3877 8.97398 11.3877ZM8.97408 16.3819H14.4181C14.8291 16.3819 15.1631 16.0489 15.1631 15.6379C15.1631 15.2269 14.8291 14.8929 14.4181 14.8929H8.97408C8.56308 14.8929 8.23008 15.2269 8.23008 15.6379C8.23008 16.0489 8.56308 16.3819 8.97408 16.3819Z" fill="currentColor"></path>
                            </svg>
                            GIF
                        </div>
                    </li>
                    <li class="col-md-6 mb-3">
                        <div class="bg-body rounded p-2 pointer">
                            <svg width="24" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M2.80272 21.1951C3.08195 21.475 3.53915 21.6691 3.94668 21.7965C4.50686 21.9715 5.10133 21.9394 5.67366 21.8095C8.08368 21.2625 14.8098 19.6194 16.4489 17.9763C18.6557 15.764 16.0691 12.7192 14.0448 10.3364L14.0408 10.3316C11.9042 7.81668 8.02041 5.10103 6.41494 6.71049C5.16816 7.96025 3.01552 15.4789 2.26629 18.2007C2.08758 18.8499 2.02769 19.5351 2.24323 20.173C2.36971 20.5473 2.55161 20.9434 2.80272 21.1951Z" fill="currentColor"/>
                                <path d="M5.75003 17.8333L3.60547 13.5507L4.50004 10.75L7.41669 16.5833L12.8333 19.9166L9.91668 20.75L5.75003 17.8333Z" fill="currentColor"/>
                                <path d="M13.2381 11.5388C14.8268 13.3931 17.0565 15.9007 16.0476 16.7694C15.0387 17.6381 11.616 15.4049 10.0273 13.5506C8.43854 11.6964 6.20879 8.78632 7.2177 7.9176C8.22661 7.04888 11.6494 9.6846 13.2381 11.5388Z" fill="currentColor"/>
                                <path opacity="0.4" d="M12.9183 2.93536L13.651 3.33951C13.7045 3.36853 13.7675 3.3699 13.8194 3.34271L14.5421 2.97096C14.5842 2.94904 14.6339 2.94519 14.6805 2.96057C14.7265 2.97574 14.7655 3.00894 14.7886 3.05269C14.8078 3.08895 14.8151 3.1301 14.8094 3.16977L14.686 3.99376C14.6758 4.05241 14.6961 4.11358 14.7396 4.1563L15.3448 4.75002C15.4162 4.82291 15.4205 4.93736 15.3547 5.00873C15.3268 5.03711 15.2902 5.05506 15.2505 5.06044L14.44 5.16219C14.3804 5.17049 14.3296 5.20737 14.303 5.26154L13.953 6.00134C13.9105 6.09301 13.8025 6.12988 13.7093 6.08449C13.6733 6.06563 13.6438 6.03576 13.625 5.99944L13.2518 5.23727C13.225 5.18261 13.1731 5.1439 13.1145 5.13516L12.2954 4.99507C12.1981 4.9786 12.1285 4.88576 12.1398 4.78741C12.1401 4.78533 12.1404 4.78301 12.1407 4.78069C12.1457 4.74043 12.1642 4.70387 12.193 4.67686L12.7713 4.10502C12.8131 4.06405 12.8317 4.00389 12.8209 3.94356L12.656 3.12556C12.6428 3.0548 12.6706 2.98462 12.7275 2.94543L12.745 2.93278C12.798 2.90377 12.8631 2.90483 12.9183 2.93536" fill="currentColor"/>
                                <path opacity="0.4" d="M18.0965 3.70291L18.7345 4.24512C18.7811 4.28422 18.8426 4.29813 18.8989 4.28184L19.6809 4.06165C19.7264 4.04855 19.7759 4.0547 19.8185 4.07907C19.8606 4.1031 19.8923 4.14343 19.9062 4.1909C19.9178 4.23027 19.9168 4.27205 19.9034 4.3098L19.6189 5.0927C19.5972 5.14814 19.605 5.21215 19.6392 5.26269L20.1145 5.96524C20.17 6.05092 20.1515 6.16393 20.0728 6.22075C20.0399 6.243 20.0004 6.2533 19.9605 6.25064L19.146 6.18872C19.0859 6.18496 19.0287 6.21097 18.992 6.25876L18.5021 6.91396C18.4423 6.99533 18.3292 7.00993 18.2468 6.94686C18.2153 6.92119 18.1923 6.88604 18.1811 6.84669L17.9666 6.02532C17.9512 5.96642 17.908 5.91813 17.8523 5.89788L17.0774 5.59723C16.9853 5.56168 16.9355 5.45681 16.9661 5.36269C16.9668 5.3607 16.9676 5.35849 16.9683 5.35628C16.9812 5.31783 17.0065 5.28567 17.0402 5.26496L17.7204 4.81988C17.7695 4.78806 17.7997 4.73283 17.801 4.67153L17.8017 3.83699C17.8028 3.76502 17.8441 3.70179 17.9076 3.67473L17.9272 3.66582C17.9849 3.64796 18.0486 3.662 18.0965 3.70291" fill="currentColor"/>
                                <path opacity="0.4" d="M20.5754 10.8178L20.7202 11.6436C20.7311 11.7035 20.7695 11.7536 20.8232 11.7772L21.5649 12.109C21.6083 12.1281 21.6425 12.1646 21.6597 12.2106C21.6767 12.256 21.6754 12.3073 21.6558 12.3527C21.6396 12.3905 21.6122 12.422 21.5778 12.4424L20.8598 12.8621C20.8078 12.8909 20.773 12.9451 20.767 13.0059L20.6845 13.8507C20.6726 13.9522 20.5863 14.0272 20.4895 14.0205C20.45 14.0165 20.4131 13.9991 20.3841 13.9715L19.7972 13.4019C19.7534 13.3605 19.6929 13.3439 19.6342 13.3571L18.8396 13.547C18.7417 13.5712 18.6454 13.51 18.6223 13.4087C18.6145 13.3688 18.6192 13.327 18.6356 13.2895L18.9945 12.5205C19.0202 12.4653 19.0178 12.4005 18.9879 12.3492L18.5837 11.6214C18.5355 11.5351 18.5641 11.4226 18.6477 11.3698C18.6495 11.3687 18.6515 11.3675 18.6534 11.3663C18.6879 11.345 18.7279 11.3364 18.767 11.3421L19.5739 11.4357C19.6319 11.4427 19.6903 11.4196 19.7305 11.3733L20.2632 10.732C20.3099 10.6774 20.3819 10.6552 20.4481 10.6751L20.4688 10.6808C20.5246 10.704 20.5646 10.7556 20.5754 10.8178Z" fill="currentColor"/>
                                <path d="M12.7629 5.73096L9.18003 10.2466" stroke="currentColor" stroke-linecap="round"/>
                                <path d="M17.2517 7.03174L10.9037 11.8678" stroke="currentColor" stroke-linecap="round"/>
                                <path d="M17.9456 12.2917L12.4352 14.4031" stroke="currentColor" stroke-linecap="round"/>
                                <rect opacity="0.4" width="1.6057" height="1.60913" rx="0.5" transform="matrix(0.965766 -0.259415 0.258224 0.966085 9.22461 4.22949)" fill="currentColor"/>
                                <rect opacity="0.4" width="1.6057" height="1.60913" rx="0.5" transform="matrix(0.965766 -0.259415 0.258224 0.966085 18.0544 15.4951)" fill="currentColor"/>
                            </svg>
                            Watch Party
                        </div>
                    </li>
                    <li class="col-md-6 mb-3">
                        <div class="bg-body rounded p-2 pointer">
                            <svg width="24" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M13.3051 5.88243V6.06547C12.8144 6.05584 12.3237 6.05584 11.8331 6.05584V5.89206C11.8331 5.22733 11.2737 4.68784 10.6064 4.68784H9.63482C8.52589 4.68784 7.62305 3.80152 7.62305 2.72254C7.62305 2.32755 7.95671 2 8.35906 2C8.77123 2 9.09508 2.32755 9.09508 2.72254C9.09508 3.01155 9.34042 3.24276 9.63482 3.24276H10.6064C12.0882 3.2524 13.2953 4.43736 13.3051 5.88243Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.164 6.08279C15.4791 6.08712 15.7949 6.09145 16.1119 6.09469C19.5172 6.09469 22 8.52241 22 11.875V16.1813C22 19.5339 19.5172 21.9616 16.1119 21.9616C14.7478 21.9905 13.3837 22.0001 12.0098 22.0001C10.6359 22.0001 9.25221 21.9905 7.88813 21.9616C4.48283 21.9616 2 19.5339 2 16.1813V11.875C2 8.52241 4.48283 6.09469 7.89794 6.09469C9.18351 6.07542 10.4985 6.05615 11.8332 6.05615C12.3238 6.05615 12.8145 6.05615 13.3052 6.06579C13.9238 6.06579 14.5425 6.07427 15.164 6.08279ZM10.8518 14.7459H9.82139V15.767C9.82139 16.162 9.48773 16.4896 9.08538 16.4896C8.67321 16.4896 8.34936 16.162 8.34936 15.767V14.7459H7.30913C6.90677 14.7459 6.57311 14.4279 6.57311 14.0233C6.57311 13.6283 6.90677 13.3008 7.30913 13.3008H8.34936V12.2892C8.34936 11.8942 8.67321 11.5667 9.08538 11.5667C9.48773 11.5667 9.82139 11.8942 9.82139 12.2892V13.3008H10.8518C11.2542 13.3008 11.5878 13.6283 11.5878 14.0233C11.5878 14.4279 11.2542 14.7459 10.8518 14.7459ZM15.0226 13.1177H15.1207C15.5231 13.1177 15.8567 12.7998 15.8567 12.3952C15.8567 12.0002 15.5231 11.6727 15.1207 11.6727H15.0226C14.6104 11.6727 14.2866 12.0002 14.2866 12.3952C14.2866 12.7998 14.6104 13.1177 15.0226 13.1177ZM16.7007 16.4318H16.7988C17.2012 16.4318 17.5348 16.1139 17.5348 15.7092C17.5348 15.3143 17.2012 14.9867 16.7988 14.9867H16.7007C16.2885 14.9867 15.9647 15.3143 15.9647 15.7092C15.9647 16.1139 16.2885 16.4318 16.7007 16.4318Z" fill="currentColor"></path>
                            </svg>
                            Play with Friends
                        </div>
                    </li>
                </ul>
                <div class="other-option border-top pt-4 mt-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="user-img me-3">
                                <img src="{{asset('modules/social-app/images/avatar/01.png')}}" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                            </div>
                            <h6 class="mb-0">Your Story</h6>
                        </div>
                        <div class="card-post-toolbar">
                            <div class="dropdown">
                                <div class="btn btn-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    Friend
                                </div>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                                    <a class="dropdown-item p-3" href="javascript:void(0)">
                                        <div class="d-flex align-items-top">
                                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5036 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0463C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.299 9.012 20.0475 9.013C19.6247 9.016 19.1177 9.021 18.8088 9.021Z" fill="currentColor"></path>
                                                <path opacity="0.4" d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1742 7.55437 17.2802 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z" fill="currentColor"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.97398 11.3877H12.359C12.77 11.3877 13.104 11.0547 13.104 10.6437C13.104 10.2327 12.77 9.89868 12.359 9.89868H8.97398C8.56298 9.89868 8.22998 10.2327 8.22998 10.6437C8.22998 11.0547 8.56298 11.3877 8.97398 11.3877ZM8.97408 16.3819H14.4181C14.8291 16.3819 15.1631 16.0489 15.1631 15.6379C15.1631 15.2269 14.8291 14.8929 14.4181 14.8929H8.97408C8.56308 14.8929 8.23008 15.2269 8.23008 15.6379C8.23008 16.0489 8.56308 16.3819 8.97408 16.3819Z" fill="currentColor"></path>
                                            </svg>
                                            <div class="data ms-2">
                                                <h6>Public</h6>
                                                <p class="mb-0">Anyone on or off Facebook</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item p-3" href="javascript:void(0)">
                                        <div class="d-flex align-items-top">
                                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" d="M12.086 22C11.9622 22 11.8393 21.9716 11.7276 21.9137L8.12627 20.0496C7.10336 19.5201 6.30397 18.9259 5.68076 18.2336C4.31353 16.7195 3.55441 14.776 3.54132 12.7599L3.50004 6.12426C3.495 5.35842 3.98833 4.67103 4.72732 4.41215L11.34 2.10679C11.7336 1.96656 12.1716 1.9646 12.5703 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.7799 16.6274 18.4349 18.1581C17.8167 18.8602 17.0253 19.4632 16.0135 20.0025L12.4444 21.9088C12.3337 21.9686 12.2098 21.999 12.086 22Z" fill="currentColor"></path>
                                                <path d="M13.0679 11.7249L14.426 10.4021C14.721 10.1148 14.721 9.65001 14.426 9.3627C14.131 9.07539 13.6528 9.07539 13.3578 9.3627L11.9996 10.6845L10.6425 9.3627C10.3475 9.07539 9.86926 9.07539 9.57427 9.3627C9.27928 9.65001 9.27928 10.1148 9.57427 10.4021L10.9324 11.7249L9.57427 13.0478C9.27928 13.3351 9.27928 13.7999 9.57427 14.0872C9.72227 14.2313 9.91557 14.3029 10.1089 14.3029C10.3012 14.3029 10.4945 14.2313 10.6425 14.0872L11.9996 12.7653L13.3578 14.0872C13.5058 14.2313 13.6981 14.3029 13.8914 14.3029C14.0847 14.3029 14.278 14.2313 14.426 14.0872C14.721 13.7999 14.721 13.3351 14.426 13.0478L13.0679 11.7249Z" fill="currentColor"></path>
                                            </svg>
                                            <div class="data ms-2">
                                                <h6>Friends</h6>
                                                <p class="mb-0">Your Friend on facebook</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item p-3" href="javascript:void(0)">
                                        <div class="d-flex align-items-top">
                                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.34933 14.8577C5.38553 14.8577 2 15.47 2 17.9173C2 20.3665 5.364 20.9999 9.34933 20.9999C13.3131 20.9999 16.6987 20.3876 16.6987 17.9403C16.6987 15.4911 13.3347 14.8577 9.34933 14.8577Z" fill="currentColor"></path>
                                                <path opacity="0.4" d="M9.34935 12.5248C12.049 12.5248 14.2124 10.4062 14.2124 7.76241C14.2124 5.11865 12.049 3 9.34935 3C6.65072 3 4.48633 5.11865 4.48633 7.76241C4.48633 10.4062 6.65072 12.5248 9.34935 12.5248Z" fill="currentColor"></path>
                                                <path opacity="0.4" d="M16.1733 7.84873C16.1733 9.19505 15.7604 10.4513 15.0363 11.4948C14.961 11.6021 15.0275 11.7468 15.1586 11.7698C15.3406 11.7995 15.5275 11.8177 15.7183 11.8216C17.6165 11.8704 19.3201 10.6736 19.7907 8.87116C20.4884 6.19674 18.4414 3.79541 15.8338 3.79541C15.551 3.79541 15.2799 3.82416 15.0157 3.87686C14.9795 3.88453 14.9404 3.90177 14.9208 3.93244C14.8954 3.97172 14.914 4.02251 14.9394 4.05605C15.7232 5.13214 16.1733 6.44205 16.1733 7.84873Z" fill="currentColor"></path>
                                                <path d="M21.779 15.1693C21.4316 14.4439 20.593 13.9465 19.3171 13.7022C18.7153 13.5585 17.0852 13.3544 15.5695 13.3831C15.547 13.386 15.5343 13.4013 15.5324 13.4109C15.5294 13.4262 15.5363 13.4492 15.5656 13.4655C16.2662 13.8047 18.9737 15.2804 18.6332 18.3927C18.6185 18.5288 18.729 18.6438 18.867 18.6246C19.5333 18.5317 21.2476 18.1704 21.779 17.0474C22.0735 16.4533 22.0735 15.7634 21.779 15.1693Z" fill="currentColor"></path>
                                            </svg>
                                            <div class="data ms-2">
                                                <h6>Friends except</h6>
                                                <p class="mb-0">Don't show to some friends</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item p-3" href="javascript:void(0)">
                                        <div class="d-flex align-items-top">
                                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2428 4.73756C15.2428 6.95855 17.0459 8.75902 19.2702 8.75902C19.5151 8.75782 19.7594 8.73431 20 8.68878V16.6615C20 20.0156 18.0215 22 14.6624 22H7.34636C3.97851 22 2 20.0156 2 16.6615V9.3561C2 6.00195 3.97851 4 7.34636 4H15.3131C15.2659 4.243 15.2423 4.49001 15.2428 4.73756ZM13.15 14.8966L16.0078 11.2088V11.1912C16.2525 10.8625 16.1901 10.3989 15.8671 10.1463C15.7108 10.0257 15.5122 9.97345 15.3167 10.0016C15.1211 10.0297 14.9453 10.1358 14.8295 10.2956L12.4201 13.3951L9.6766 11.2351C9.51997 11.1131 9.32071 11.0592 9.12381 11.0856C8.92691 11.1121 8.74898 11.2166 8.63019 11.3756L5.67562 15.1863C5.57177 15.3158 5.51586 15.4771 5.51734 15.6429C5.5002 15.9781 5.71187 16.2826 6.03238 16.3838C6.35288 16.485 6.70138 16.3573 6.88031 16.0732L9.35125 12.8771L12.0948 15.0283C12.2508 15.1541 12.4514 15.2111 12.6504 15.1863C12.8494 15.1615 13.0297 15.0569 13.15 14.8966Z" fill="currentColor"></path>
                                                <circle opacity="0.4" cx="19.5" cy="4.5" r="2.5" fill="currentColor"></circle>
                                            </svg>
                                            <div class="data ms-2">
                                                <h6>Only Me</h6>
                                                <p class="mb-0">Only me</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
            </div>
        </div>
    </div>
</div>
