@extends('layouts.UserNavbar')
      @section('style')
         <link href="{{ asset('css/UserHomepage.css') }}" rel="stylesheet">
       @endsection
          @section('navbar')

  
{{-- <div class="common-structure">
      
  <aside class="side-a">
    <section class="common-section">
        <ul class="common-list">
     
        <li class="common-list-item">
          <a href="https://www.facebook.com/eladsc/" target="_blank" class="common-list-button">
            <span class="icon">
             
            </span>
            <span class="text Top-responder">Top Responder</span>
          </a>
        </li>
        <li class="common-list-item">
          <a class="common-list-button">
<span class="icon" aria-hidden="true">🏪</span>
            <span class="text">Department of Transportion</span>
          </a>
        </li>
        <li class="common-list-item">
          <a class="common-list-button">
            <span class="icon">🏪</span>
            <span class="text">Department of Passport</span>
          </a>
        </li>
        <li class="common-list-item">
          <a class="common-list-button">
            <span class="icon">🏪</span>
            <span class="text">Financial Comptroller General Office
            </span>
          </a>
        </li>
        <li class="common-list-item">
          <a class="common-list-button">
            <span class="icon">🏪</span>
            <span class="text">Ministry of Education, Science and Technology</span>
          </a>
        </li>

       <li class="common-list-item">
          <a class="common-list-button">
            <span class="icon">🏪</span>
            <span class="text">Department of Passport</span>
          </a>
        </li>
        <li class="common-list-item">
          <a class="common-list-button">
            <span class="icon">🏪</span>
            <span class="text">Financial Comptroller General Office
            </span>
          </a>
        </li>
        <li class="common-list-item">
          <a class="common-list-button">
            <span class="icon">🏪</span>
            <span class="text">Ministry of Education, Science and Technology</span>
          </a>
        </li>
      </ul>

    </section> --}}
    <!-- <section class="common-section">
      <h2 class="section-title">Shortcuts</h2>
      <ul class="common-list">
        <li class="common-list-item">
          <a href="#" target="_blank" class="common-list-button">
         
            <span class="text">About Us</span>
          </a>
        </li>
        <li class="common-list-item">
          <a href="#" target="_blank" class="common-list-button">
        
            <span class="text">Contact Us</span>
          </a>
        </li>
              
      </ul>
     
    </section> -->
  {{-- </aside> --}}
  <main class="main-feed">
    <ul class="main-feed-list">
      <li class="main-feed-item">
        <article class="common-post">
          <header class="common-post-header u-flex">
            <img src="https://assets.codepen.io/65740/internal/avatars/users/default.png" class="user-image" width="40" height="40" alt="">
            <div class="common-post-info">
              <div class="user-and-group u-flex">
                <a href="#" target="_blank">Michael Scott</a>
              </div>
              <div class="time-and-privacy"><time datetime="">October 14 at 1:51 PM</time></div>
            </div>
           
          </header>
          <div class="common-post-content common-content">
            <p>
             Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime nihil qui dignissimos voluptatibus aperiam voluptatem ipsa illum facere sint, dolorem provident rem id beatae voluptate officia corrupti nam iste, odit quas dolorum quidem molestias et suscipit quod! Libero in beatae consequatur, velit enim quis molestias sit accusamus aliquam explicabo minus nobis aspernatur, asperiores iusto consectetur animi possimus molestiae eius aliquid. Fugit provident quos blanditiis nisi perferendis animi laudantium perspiciatis ipsa non cum, numquam debitis error suscipit aliquid soluta nobis! Saepe explicabo, recusandae, veniam odio pariatur, quia aspernatur nihil quibusdam assumenda vel sapiente praesentium atque nesciunt non eligendi ipsam quaerat harum?
            </p>   
          
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex asperiores quas tenetur vero nemo iste, soluta enim mollitia odio quaerat. Iusto, eaque! Rem magnam rerum exercitationem dolore magni minus provident.
            </p>
          </div>
         
          <section class="actions-buttons">
            <ul class="actions-buttons-list u-flex">
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">👍</span><span class="text">Up Vote</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">👎</span><span class="text">Down Vote</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">💬</span><span class="text">Comment</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">💌</span><span class="text">Share</span></button></li>
            </ul>
          </section>
        </article>
      </li>

      <li class="main-feed-item">
        <article class="common-post">
          <header class="common-post-header u-flex">
            <img src="https://assets.codepen.io/65740/internal/avatars/users/default.png" class="user-image" width="40" height="40" alt="">
            <div class="common-post-info">
              <div class="user-and-group u-flex">
                <a href="#" target="_blank">Michael Scott</a>
              </div>
              <div class="time-and-privacy"><time datetime="">October 14 at 1:51 PM</time></div>
            </div>
          </header>
          <div class="common-post-content common-content">
            <p>
             Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime nihil qui dignissimos voluptatibus aperiam voluptatem ipsa illum facere sint, dolorem provident rem id beatae voluptate officia corrupti nam iste, odit quas dolorum quidem molestias et suscipit quod! Libero in beatae consequatur, velit enim quis molestias sit accusamus aliquam explicabo minus nobis aspernatur, asperiores iusto consectetur animi possimus molestiae eius aliquid. Fugit provident quos blanditiis nisi perferendis animi laudantium perspiciatis ipsa non cum, numquam debitis error suscipit aliquid soluta nobis! Saepe explicabo, recusandae, veniam odio pariatur, quia aspernatur nihil quibusdam assumenda vel sapiente praesentium atque nesciunt non eligendi ipsam quaerat harum?
            </p>   
          </div>
         
          <section class="actions-buttons">
            <ul class="actions-buttons-list u-flex">
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">👍</span><span class="text">Up Vote</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">👎</span><span class="text">Down Vote</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">💬</span><span class="text">Comment</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">💌</span><span class="text">Share</span></button></li>
            </ul>
          </section>
        </article>
      </li>

      <li class="main-feed-item">
        <article class="common-post">
          <header class="common-post-header u-flex">
            <img src="https://assets.codepen.io/65740/internal/avatars/users/default.png" class="user-image" width="40" height="40" alt="">
            <div class="common-post-info">
              <div class="user-and-group u-flex">
                <a href="#" target="_blank">Michael Scott</a>
              </div>
              <div class="time-and-privacy"><time datetime="">October 14 at 1:51 PM</time></div>
            </div>
          </header>
          <div class="common-post-content common-content">
            <p>
             Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime nihil qui dignissimos voluptatibus aperiam voluptatem ipsa illum facere sint, dolorem provident rem id beatae voluptate officia corrupti nam iste, odit quas dolorum quidem molestias et suscipit quod! Libero in beatae consequatur, velit enim quis molestias sit accusamus aliquam explicabo minus nobis aspernatur, asperiores iusto consectetur animi possimus molestiae eius aliquid. Fugit provident quos blanditiis nisi perferendis animi laudantium perspiciatis ipsa non cum, numquam debitis error suscipit aliquid soluta nobis! Saepe explicabo, recusandae, veniam odio pariatur, quia aspernatur nihil quibusdam assumenda vel sapiente praesentium atque nesciunt non eligendi ipsam quaerat harum?
            </p>   
          </div>
         
          <section class="actions-buttons">
            <ul class="actions-buttons-list u-flex">
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">👍</span><span class="text">Up Vote</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">👎</span><span class="text">Down Vote</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">💬</span><span class="text">Comment</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">💌</span><span class="text">Share</span></button></li>
            </ul>
          </section>
        </article>
      </li>

      <li class="main-feed-item">
        <article class="common-post">
          <header class="common-post-header u-flex">
            <img src="https://assets.codepen.io/65740/internal/avatars/users/default.png" class="user-image" width="40" height="40" alt="">
            <div class="common-post-info">
              <div class="user-and-group u-flex">
                <a href="#" target="_blank">Michael Scott</a>
              </div>
              <div class="time-and-privacy"><time datetime="">October 14 at 1:51 PM</time></div>
            </div>
          </header>
          <div class="common-post-content common-content">
            <p>
             Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime nihil qui dignissimos voluptatibus aperiam voluptatem ipsa illum facere sint, dolorem provident rem id beatae voluptate officia corrupti nam iste, odit quas dolorum quidem molestias et suscipit quod! Libero in beatae consequatur, velit enim quis molestias sit accusamus aliquam explicabo minus nobis aspernatur, asperiores iusto consectetur animi possimus molestiae eius aliquid. Fugit provident quos blanditiis nisi perferendis animi laudantium perspiciatis ipsa non cum, numquam debitis error suscipit aliquid soluta nobis! Saepe explicabo, recusandae, veniam odio pariatur, quia aspernatur nihil quibusdam assumenda vel sapiente praesentium atque nesciunt non eligendi ipsam quaerat harum?
            </p>   
          </div>
         
          <section class="actions-buttons">
            <ul class="actions-buttons-list u-flex">
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">👍</span><span class="text">Up Vote</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">👎</span><span class="text">Down Vote</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">💬</span><span class="text">Comment</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">💌</span><span class="text">Share</span></button></li>
            </ul>
          </section>
        </article>
      </li>

      <li class="main-feed-item">
        <article class="common-post">
          <header class="common-post-header u-flex">
            <img src="https://assets.codepen.io/65740/internal/avatars/users/default.png" class="user-image" width="40" height="40" alt="">
            <div class="common-post-info">
              <div class="user-and-group u-flex">
                <a href="#" target="_blank">Michael Scott</a>
              </div>
              <div class="time-and-privacy"><time datetime="">October 14 at 1:51 PM</time></div>
            </div>
            <button class="icon-button-2 u-margin-inline-start" aria-label="more options"><span class="icon-menu"></span></button>
          </header>
          <div class="common-post-content common-content">
            <p>
             Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime nihil qui dignissimos voluptatibus aperiam voluptatem ipsa illum facere sint, dolorem provident rem id beatae voluptate officia corrupti nam iste, odit quas dolorum quidem molestias et suscipit quod! Libero in beatae consequatur, velit enim quis molestias sit accusamus aliquam explicabo minus nobis aspernatur, asperiores iusto consectetur animi possimus molestiae eius aliquid. Fugit provident quos blanditiis nisi perferendis animi laudantium perspiciatis ipsa non cum, numquam debitis error suscipit aliquid soluta nobis! Saepe explicabo, recusandae, veniam odio pariatur, quia aspernatur nihil quibusdam assumenda vel sapiente praesentium atque nesciunt non eligendi ipsam quaerat harum?
            </p>   
          </div>
         
          <section class="actions-buttons">
            <ul class="actions-buttons-list u-flex">
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">👍</span><span class="text">Up Vote</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">👎</span><span class="text">Down Vote</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">💬</span><span class="text">Comment</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">💌</span><span class="text">Share</span></button></li>
            </ul>
          </section>
        </article>
      </li>

      <li class="main-feed-item">
        <article class="common-post">
          <header class="common-post-header u-flex">
            <img src="https://assets.codepen.io/65740/internal/avatars/users/default.png" class="user-image" width="40" height="40" alt="">
            <div class="common-post-info">
              <div class="user-and-group u-flex">
                <a href="#" target="_blank">Michael Scott</a>
              </div>
              <div class="time-and-privacy"><time datetime="">October 14 at 1:51 PM</time></div>
            </div>
          </header>
          <div class="common-post-content common-content">
            <p>
             Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime nihil qui dignissimos voluptatibus aperiam voluptatem ipsa illum facere sint, dolorem provident rem id beatae voluptate officia corrupti nam iste, odit quas dolorum quidem molestias et suscipit quod! Libero in beatae consequatur, velit enim quis molestias sit accusamus aliquam explicabo minus nobis aspernatur, asperiores iusto consectetur animi possimus molestiae eius aliquid. Fugit provident quos blanditiis nisi perferendis animi laudantium perspiciatis ipsa non cum, numquam debitis error suscipit aliquid soluta nobis! Saepe explicabo, recusandae, veniam odio pariatur, quia aspernatur nihil quibusdam assumenda vel sapiente praesentium atque nesciunt non eligendi ipsam quaerat harum?
            </p>   
          </div>
         
          <section class="actions-buttons">
            <ul class="actions-buttons-list u-flex">
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">👍</span><span class="text">Up Vote</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">👎</span><span class="text">Down Vote</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">💬</span><span class="text">Comment</span></button></li>
              <li class="actions-buttons-item"><button class="actions-buttons-button"><span class="icon">💌</span><span class="text">Share</span></button></li>
            </ul>
          </section>
        </article>
      </li>
    
     </main>
  @endsection
  {{-- <aside class="side-b">
    <section class="common-section">
      <h2 class="section-title">Topics</h2>
      <ul class="common-list">
        <li class="common-list-item">
          <a href="#" target="_blank" class="common-list-button is-ads">
            <!-- <div class="image"></div> -->
            <div class="text">
              <h4 class="ads-title">◾Hospital</h4>
             
            </div>
          </a>
        </li>
        <li class="common-list-item">
          <a href="#" target="_blank" class="common-list-button is-ads">
            <!-- <div class="image"></div> -->
            <div class="text">
              <h4 class="ads-title">◾Drinking Water</h4>
             
            </div>
          </a>
        </li>      
      </ul>
     
      <ul class="common-list">
        <li class="common-list-item">
          <a href="#" target="_blank" class="common-list-button is-ads">
            <!-- <div class="image"></div> -->
            <div class="text">
              <h4 class="ads-title">◾Hospital</h4>
             
            </div>
          </a>
        </li>
        <li class="common-list-item">
          <a href="#" target="_blank" class="common-list-button is-ads">
            <!-- <div class="image"></div> -->
            <div class="text">
              <h4 class="ads-title">◾Drinking Water</h4>
             
            </div>
          </a>
        </li>      
      </ul>
     
    </section>
  </aside>
</div> --}}