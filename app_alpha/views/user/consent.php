<div class="row">
	<div class="container">


    <div class="form-group">

      <h4 class="h4">Consent Form - content to be added soon</h4>

      <?php $attributes = array('consent' => 'consent_form'); ?>
      <?php echo form_open('user/consent', $attributes); ?>
        <div class="overflow-scroll">
          I. What is this about?</br>
          RAND is developing a program to help support military partners concerned about their service member’s alcohol use. The program’s goals are to help partners take care of their own needs and communicate with their loved ones in a positive manner that might help them reduce their drinking and seek help if needed. Your participation will help us adapt the program to make it more helpful. RAND is a non-profit organization that does research and this project is funded by the National Institutes of Health. 

          II. What will we ask YOU to do?</br>
          If you agree to participate, we will ask you to do three things:

          1. Complete five online surveys. We are asking you to complete a total of five surveys. The first will take about 20-30 minutes and ask you multiple choice questions about your physical and mental health, alcohol, recent events, and relationship or family communication.  The remaining four are satisfaction surveys about the online program that take about 5 minutes each. You can complete all the surveys online and skip any questions that you do not wish to answer. Your answers are confidential and will help us better understand what you think about our online program and how it could be improved.

          2. Complete the online program. RAND will ask you to try out our online program. This program, Partners Connect, is meant to teach and show you how to reduce the stress you experience as a result of problems that come up around your partner’s drinking. The program will be presented in 4 different online sessions, averaging about 30 minutes per session, though some sessions may come close to 45 min. You will be able to access the program 24/7 and go through the program at your own speed at home, or wherever you have access to a computer and the internet, over a 6-week period. Ideally you would complete each of the four online sessions about a week apart.

          3. Tell us your opinions about the online program. After your fourth and last online program session, someone at RAND will schedule a brief 30-minute phone interview to ask you questions about the program. For example, we will ask you how easy or hard it is to understand the program and what things you liked or did not like about the program. 

          The goals of the project are to understand whether our new program will be acceptable and user-friendly to spouses and partners of military service members. RAND will pay you $45 for completing the surveys and a bonus of $25 if you complete 3 of the four brief surveys. We will also pay you $25 for completing the phone interview.  This would be a total of up to $95.

          III. Costs</br>
          There is no financial cost to you for participating. 

          IV. Benefits </br>
          Although it is not a main goal of the program, and may not happen, changes you make as a result of being in the program may improve your mood and also encourage your partner to do something about his/her drinking, if he or she is not doing something already. 
          You may also learn skills that may benefit your relationship and other areas of your life (e.g., improved communication and problem-solving).. 
          Your participation will also help us learn the best ways to help family members and their partners cope with drinking in the household. 

          V. Risks</br>
          You may feel uncomfortable from answering some of the questions on the survey or participating in your session may be mildly upsetting. You can refuse to answer any questions or leave the phone interview or online session at any time.
          As with any program such as this, some family conflict could arise should you participate either against the wishes or knowledge of your partner. It is important for you to know, however, that your partner's permission or his knowledge of your participation is not required in order for you to participate in this program. It is entirely up to you to decide whether or not s/he knows about your participation. We will not be talking to him/her about your participation. Of course, changing how you cope with your partner’s drinking problem as a result of participating in this program also could cause further conflict between you and your partner. During your phone interview, we will ask you to tell us about any conflict that occurs.
          In addition, we are asking you for an email address and phone number to contact you regarding surveys, program material, and follow-up. While we will not identify ourselves to anyone except you when calling, please be aware that it is possible your partner may answer the phone when we call. Likewise, email is not entirely secure and if your partner has access to your email, he/she may become aware of your involvement in the study.  


          VI. Confidentiality</br>
          To help keep your information private, we have applied for a Confidentiality Certificate from the Department of Health and Human Services (DHHS). This certificate assures that RAND is not required to release information about you in any civil, criminal, administrative, legislative, or other proceedings, whether State, Federal, or local. The Certificate does not imply approval or disapproval of the project by the Secretary of DHHS.

          Your confidentiality is very important to us. We will never write your name, contact information, or any other identifiers on our interview materials. Instead, we will use an ID number to protect your confidentiality. We will only share this information with RAND research staff directly involved in this study. We will not share the information you provide during the interview with the military, your family members, or law enforcement officials. Your information will remain confidential except under the following circumstances:

          1. If we need to protect you or others from imminent harm. An example of this is if you want to hurt yourself or others. In that case, we will give information about you to others (e.g., 911, research staff) in order to protect you or others from harm. 
          2. If you tell us about the abuse of a child or of an elderly person. In that case, we may report it to the authorities.

          In order to remember the feedback you provide about the online program, we will audiotape the phone interview so that we make sure we don’t miss any comments. The audiotapes will be used to gather themes about what people think about our new program. No one outside the RAND research staff will have access to these tapes. We will destroy all tapes at the end of the project and no later than August 2017. 

          The internet survey meets stringent industry standards for security. Survey information is protected using Secure Socket Layers (SSL) technology, which uses a private channel for sending information over the Internet. This private channel allows “encryption,” which re-codes the information so that it is meaningless to another person. 

          VII. YOUR PARTICIPATION</br>
          You don’t have to participate if you do not want to. You may withdraw from the study at any time. 

          VIII. who is leading the project?</br>
          Dr. Karen Osilla from RAND is leading the project. If you have any questions or concerns, please call Dr. Osilla at 1-800-447-2631, ext. 6074. 

          IX. If you have questions</br>
          If you have questions about human subjects protection, please contact the Human Subjects Protection Administrator, Marilyn Yokota at 1-800-447-2631 x6369.
        </div>

        <p>I have read and I understand the information above. I agree to participate.</p>

        <select name="consent_box">
          <option>Select option : </option>
          <option value="1">I consent</option>
          <option value="2">I do not consent</option>
          <option value="3">Opt Out</option>
        </select>

        <input class="mtop50" type="hidden" name="user_id" value="<?php echo $user_id; ?>" /> </br>

        <input class="mtop50" type="submit" value="submit" />

      </form>

    </div>          
         
  </div>

</div>