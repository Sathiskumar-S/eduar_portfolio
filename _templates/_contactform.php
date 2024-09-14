 <!-- Contact Form-->
 <section class="section section-sm section-last bg-default text-left" id="contacts">
     <div class="container">
         <article class="title-classic">
             <div class="title-classic-title">
                 <h3>Get in touch</h3>
             </div>
             <div class="title-classic-text">
                 <p>If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
             </div>
         </article>
         <form class="rd-form rd-form-variant-2 rd-mailform"  method="POST" action="">
             <div class="row row-14 gutters-14">
                 <div class="col-md-4">
                     <div class="form-wrap">
                         <input class="form-input" id="contact-your-name-2" type="text" name="name"
                             data-constraints="@Required">
                         <label class="form-label" for="contact-your-name-2">Your Name</label>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="form-wrap">
                         <input class="form-input" id="contact-email-2" type="email" name="email"
                             data-constraints="@Email @Required">
                         <label class="form-label" for="contact-email-2">E-mail</label>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="form-wrap">
                         <input class="form-input" id="contact-phone-2" type="text" name="phone"
                             data-constraints="@Numeric">
                         <label class="form-label" for="contact-phone-2">Phone</label>
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="form-wrap">
                         <label class="form-label" for="contact-message-2">Message</label>
                         <textarea class="form-input textarea-lg" id="contact-message-2" name="message"
                             data-constraints="@Required"></textarea>
                     </div>
                 </div>
             </div>
             <button class="button button-primary button-pipaluk" type="submit" name="contactform">Send Message</button>
         </form>
     </div>
 </section>