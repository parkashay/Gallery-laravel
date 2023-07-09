<footer id="footer" class="panel">
    <div class="inner split">
        <div>
            <section>
                @if (isset($about))
                 <h2>{{$about->heading}}</h2>
                 <p>{{$about->description}}</p>
                @endif
            </section>
            <section>
                <h2>Follow me on ...</h2>
                <ul class="icons">
                    <li><a href="https://github.com/parkashay" class="icon brands fa-github" target="_blank"><span
                                class="label">GitHub</span></a></li>
                    <li><a href="https://www.linkedin.com/in/prakash-poudel-2a8a1b1a9/" target="_blank"
                            class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                </ul>
            </section>
            <p class="copyright">
                &copy; <a href="/addimage"> Prakash Poudel </a>.
            </p>
        </div>
    </div>
</footer>
