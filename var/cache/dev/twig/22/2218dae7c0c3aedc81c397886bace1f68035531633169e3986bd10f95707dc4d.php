<?php

/* base.html.twig */
class __TwigTemplate_3b771fc416b27a02b2b7c8c4c68ff84640ef0eda51a2930c0f787b2609e23a8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbc9f6e0220ac96685a4b8336ea9976c71a7e94e6389a18f25100ac8ed5a869f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc9f6e0220ac96685a4b8336ea9976c71a7e94e6389a18f25100ac8ed5a869f->enter($__internal_bbc9f6e0220ac96685a4b8336ea9976c71a7e94e6389a18f25100ac8ed5a869f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3032d278a436519b06ff042d9f919dbee35abde4ffc44b3125b16f05b6b01ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3032d278a436519b06ff042d9f919dbee35abde4ffc44b3125b16f05b6b01ed9->enter($__internal_3032d278a436519b06ff042d9f919dbee35abde4ffc44b3125b16f05b6b01ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/uniform.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/select2.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/matrix-style.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/matrix-media.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-wysihtml5.css"), "html", null, true);
        echo "\" />
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.gritter.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/widgets.min.css"), "html", null, true);
        echo "\"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
 <title>";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "</head>
<body>




<!--Header-part-->
<div id=\"header\">
  <h1><a href=\"#\">OTTOCar</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id=\"user-nav\" class=\"navbar navbar-inverse\">
  <ul class=\"nav\">
    <li  class=\"dropdown\" id=\"profile-messages\" ><a title=\"\" href=\"#\" data-toggle=\"dropdown\" data-target=\"#profile-messages\" class=\"dropdown-toggle\"><i class=\"icon icon-user\"></i>  <span class=\"text\">Welcome User</span><b class=\"caret\"></b></a>
      <ul class=\"dropdown-menu\">
        <li><a href=\"#\"><i class=\"icon-user\"></i> My Profile</a></li>
        <li class=\"divider\"></li>
        <li class=\"divider\"></li>
        <li><a href=\"login.html\"><i class=\"icon-key\"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=\"dropdown\" id=\"menu-messages\"><a href=\"#\" data-toggle=\"dropdown\" data-target=\"#menu-messages\" class=\"dropdown-toggle\"><i class=\"icon icon-envelope\"></i> <span class=\"text\">Notifications</span> <span class=\"label label-important\">5</span> <b class=\"caret\"></b></a>
      <ul class=\"dropdown-menu\">
           <div class= \"widget-notifications no-padding\" id=\"notif\">
              <div class=\"notifications-list\" id=\"main-navbar-notifications\">
                <div class=\"notification\">
                  <div class=\"notification-title text-success\">
                    File N°1151 
                  </div>
                  <div class=\"notification-description text-green\">
                    Problem - Car Repaired
                  </div>
                  <div class=\"notification-ago\">
                    Feb - June 2016
                  </div>
                  <div class=\"notification-icon\">
                    <i class=\"fa fa-check-square-o text-success\"></i></div>
                  </div>

                  <div class=\"notification\">
                  <div class=\"notification-title text-red\">
                    File N°1156
                  </div>
                  <div class=\"notification-description text-red\">
                    Problem Solved - Car Not Repaired
                  </div>
                  <div class=\"notification-ago\">
                    Jan - June 2016
                  </div>
                  <div class=\"notification-icon\">
                    <i class=\"fa fa-exclamation-circle text-red\"></i></div>
                  </div>
              </div>
      </ul>
    </li>
    <li class=\"\"><a title=\"\" href=\"login.html\"><i class=\"icon icon-share-alt\"></i> <span class=\"text\">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->


<!--main-container-part-->
<div id=\"content\">
<!--breadcrumbs-->
  <div id=\"content-header\">
    <div id=\"breadcrumb\"> <a href=\"index.html\" title=\"Go to Home\" class=\"tip-bottom\"><i class=\"icon-home\"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->

  <div class=\"container-fluid\">
  <!-- Put your code here--> 

 ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "    
   
</div>
<!--Footer-part-->
<hr/>
<div class=\"row-fluid\">
  <div id=\"footer\" class=\"span12\"> 2013 &copy; Matrix Admin. Brought to you by <a href=\"http://themedesigner.in\">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->

<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.uniform.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/matrix.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/matrix.tables.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  \$(function(){

   // jQuery methods go here...
   /*alert(\"The paragraph was clicked.\");*/
   \$(\"#ficheLink\").click(function(){
    \$(this).hide();
        \$(\"#ficheOpt1\").fadeIn();
        \$(\"#ficheOpt1\").css(\"display\",\"block\");
        \$(\"#ficheOpt2\").fadeIn();
        \$(\"#ficheOpt2\").css(\"display\",\"block\");

      });

    \$(\"#compteLink\").click(function(){
    \$(this).hide();
        \$(\"#compteOpt1\").fadeIn();
        \$(\"#compteOpt1\").css(\"display\",\"block\");
        \$(\"#compteOpt2\").fadeIn();
        \$(\"#compteOpt2\").css(\"display\",\"block\");
        
      });


  function goPage (newURL) {
      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != \"\") {
      
          // if url is \"-\", it is this page -- reset the menu:
          if (newURL == \"-\" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}

});
</script>
";
        // line 163
        $this->displayBlock('javascripts', $context, $blocks);
        // line 164
        echo "</body>
</html>
";
        
        $__internal_bbc9f6e0220ac96685a4b8336ea9976c71a7e94e6389a18f25100ac8ed5a869f->leave($__internal_bbc9f6e0220ac96685a4b8336ea9976c71a7e94e6389a18f25100ac8ed5a869f_prof);

        
        $__internal_3032d278a436519b06ff042d9f919dbee35abde4ffc44b3125b16f05b6b01ed9->leave($__internal_3032d278a436519b06ff042d9f919dbee35abde4ffc44b3125b16f05b6b01ed9_prof);

    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        $__internal_65d4a1e35f8f276917af25d2aa66483d3c5e008d275b0ce27b4c115189aa3672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d4a1e35f8f276917af25d2aa66483d3c5e008d275b0ce27b4c115189aa3672->enter($__internal_65d4a1e35f8f276917af25d2aa66483d3c5e008d275b0ce27b4c115189aa3672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d8037a1747564dcdb26f16de946313d84a4786636b75019c5fe81b48dc3dc782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8037a1747564dcdb26f16de946313d84a4786636b75019c5fe81b48dc3dc782->enter($__internal_d8037a1747564dcdb26f16de946313d84a4786636b75019c5fe81b48dc3dc782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d8037a1747564dcdb26f16de946313d84a4786636b75019c5fe81b48dc3dc782->leave($__internal_d8037a1747564dcdb26f16de946313d84a4786636b75019c5fe81b48dc3dc782_prof);

        
        $__internal_65d4a1e35f8f276917af25d2aa66483d3c5e008d275b0ce27b4c115189aa3672->leave($__internal_65d4a1e35f8f276917af25d2aa66483d3c5e008d275b0ce27b4c115189aa3672_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1330dade58a08be6c616c284db45a7965e03f1bd5aed4670c64ec9eefb53db00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1330dade58a08be6c616c284db45a7965e03f1bd5aed4670c64ec9eefb53db00->enter($__internal_1330dade58a08be6c616c284db45a7965e03f1bd5aed4670c64ec9eefb53db00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a527b578bf7d5b8b049f778854559a2f9cfca9b28ae7423bacf28007a6597a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a527b578bf7d5b8b049f778854559a2f9cfca9b28ae7423bacf28007a6597a9c->enter($__internal_a527b578bf7d5b8b049f778854559a2f9cfca9b28ae7423bacf28007a6597a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a527b578bf7d5b8b049f778854559a2f9cfca9b28ae7423bacf28007a6597a9c->leave($__internal_a527b578bf7d5b8b049f778854559a2f9cfca9b28ae7423bacf28007a6597a9c_prof);

        
        $__internal_1330dade58a08be6c616c284db45a7965e03f1bd5aed4670c64ec9eefb53db00->leave($__internal_1330dade58a08be6c616c284db45a7965e03f1bd5aed4670c64ec9eefb53db00_prof);

    }

    // line 97
    public function block_body($context, array $blocks = array())
    {
        $__internal_6445a791dc651d63b2706ad95327f5687425ba1a90f9403818643cf404442e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6445a791dc651d63b2706ad95327f5687425ba1a90f9403818643cf404442e68->enter($__internal_6445a791dc651d63b2706ad95327f5687425ba1a90f9403818643cf404442e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efd206915763559c5567162fcbe114f8f9100e52e3d08c54a3a05457f438fba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd206915763559c5567162fcbe114f8f9100e52e3d08c54a3a05457f438fba1->enter($__internal_efd206915763559c5567162fcbe114f8f9100e52e3d08c54a3a05457f438fba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_efd206915763559c5567162fcbe114f8f9100e52e3d08c54a3a05457f438fba1->leave($__internal_efd206915763559c5567162fcbe114f8f9100e52e3d08c54a3a05457f438fba1_prof);

        
        $__internal_6445a791dc651d63b2706ad95327f5687425ba1a90f9403818643cf404442e68->leave($__internal_6445a791dc651d63b2706ad95327f5687425ba1a90f9403818643cf404442e68_prof);

    }

    // line 163
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b62a257519eb3a2384b327a1771ab9188afbe3606df3446eeadb06b9660877c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b62a257519eb3a2384b327a1771ab9188afbe3606df3446eeadb06b9660877c->enter($__internal_7b62a257519eb3a2384b327a1771ab9188afbe3606df3446eeadb06b9660877c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_993b36a832d83ea2a2beebddfc7221c5ec46c30a8184ca500cb72c4097b758fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993b36a832d83ea2a2beebddfc7221c5ec46c30a8184ca500cb72c4097b758fe->enter($__internal_993b36a832d83ea2a2beebddfc7221c5ec46c30a8184ca500cb72c4097b758fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_993b36a832d83ea2a2beebddfc7221c5ec46c30a8184ca500cb72c4097b758fe->leave($__internal_993b36a832d83ea2a2beebddfc7221c5ec46c30a8184ca500cb72c4097b758fe_prof);

        
        $__internal_7b62a257519eb3a2384b327a1771ab9188afbe3606df3446eeadb06b9660877c->leave($__internal_7b62a257519eb3a2384b327a1771ab9188afbe3606df3446eeadb06b9660877c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 163,  305 => 97,  288 => 19,  270 => 18,  258 => 164,  256 => 163,  204 => 114,  200 => 113,  196 => 112,  192 => 111,  188 => 110,  184 => 109,  180 => 108,  168 => 98,  166 => 97,  87 => 20,  85 => 19,  81 => 18,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-responsive.min.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/uniform.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/select2.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/matrix-style.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/matrix-media.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/datepicker.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('bootstrap-wysihtml5.css')}}\" />
<link href=\"{{ asset('font-awesome/css/font-awesome.css')}}\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/jquery.gritter.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/widgets.min.css')}}\"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
 <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
</head>
<body>




<!--Header-part-->
<div id=\"header\">
  <h1><a href=\"#\">OTTOCar</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id=\"user-nav\" class=\"navbar navbar-inverse\">
  <ul class=\"nav\">
    <li  class=\"dropdown\" id=\"profile-messages\" ><a title=\"\" href=\"#\" data-toggle=\"dropdown\" data-target=\"#profile-messages\" class=\"dropdown-toggle\"><i class=\"icon icon-user\"></i>  <span class=\"text\">Welcome User</span><b class=\"caret\"></b></a>
      <ul class=\"dropdown-menu\">
        <li><a href=\"#\"><i class=\"icon-user\"></i> My Profile</a></li>
        <li class=\"divider\"></li>
        <li class=\"divider\"></li>
        <li><a href=\"login.html\"><i class=\"icon-key\"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=\"dropdown\" id=\"menu-messages\"><a href=\"#\" data-toggle=\"dropdown\" data-target=\"#menu-messages\" class=\"dropdown-toggle\"><i class=\"icon icon-envelope\"></i> <span class=\"text\">Notifications</span> <span class=\"label label-important\">5</span> <b class=\"caret\"></b></a>
      <ul class=\"dropdown-menu\">
           <div class= \"widget-notifications no-padding\" id=\"notif\">
              <div class=\"notifications-list\" id=\"main-navbar-notifications\">
                <div class=\"notification\">
                  <div class=\"notification-title text-success\">
                    File N°1151 
                  </div>
                  <div class=\"notification-description text-green\">
                    Problem - Car Repaired
                  </div>
                  <div class=\"notification-ago\">
                    Feb - June 2016
                  </div>
                  <div class=\"notification-icon\">
                    <i class=\"fa fa-check-square-o text-success\"></i></div>
                  </div>

                  <div class=\"notification\">
                  <div class=\"notification-title text-red\">
                    File N°1156
                  </div>
                  <div class=\"notification-description text-red\">
                    Problem Solved - Car Not Repaired
                  </div>
                  <div class=\"notification-ago\">
                    Jan - June 2016
                  </div>
                  <div class=\"notification-icon\">
                    <i class=\"fa fa-exclamation-circle text-red\"></i></div>
                  </div>
              </div>
      </ul>
    </li>
    <li class=\"\"><a title=\"\" href=\"login.html\"><i class=\"icon icon-share-alt\"></i> <span class=\"text\">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->


<!--main-container-part-->
<div id=\"content\">
<!--breadcrumbs-->
  <div id=\"content-header\">
    <div id=\"breadcrumb\"> <a href=\"index.html\" title=\"Go to Home\" class=\"tip-bottom\"><i class=\"icon-home\"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->

  <div class=\"container-fluid\">
  <!-- Put your code here--> 

 {% block body %}{% endblock %}
    
   
</div>
<!--Footer-part-->
<hr/>
<div class=\"row-fluid\">
  <div id=\"footer\" class=\"span12\"> 2013 &copy; Matrix Admin. Brought to you by <a href=\"http://themedesigner.in\">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->

<script src=\"{{ asset('js/jquery.min.js')}}\"></script> 
<script src=\"{{ asset('js/bootstrap.min.js')}}\"></script> 
<script src=\"{{ asset('js/jquery.uniform.js')}}\"></script> 
<script src=\"{{ asset('js/select2.min.js')}}\"></script> 
<script src=\"{{ asset('js/jquery.dataTables.min.js')}}\"></script> 
<script src=\"{{ asset('js/matrix.js')}}\"></script> 
<script src=\"{{ asset('js/matrix.tables.js')}}\"></script>
<script type=\"text/javascript\">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  \$(function(){

   // jQuery methods go here...
   /*alert(\"The paragraph was clicked.\");*/
   \$(\"#ficheLink\").click(function(){
    \$(this).hide();
        \$(\"#ficheOpt1\").fadeIn();
        \$(\"#ficheOpt1\").css(\"display\",\"block\");
        \$(\"#ficheOpt2\").fadeIn();
        \$(\"#ficheOpt2\").css(\"display\",\"block\");

      });

    \$(\"#compteLink\").click(function(){
    \$(this).hide();
        \$(\"#compteOpt1\").fadeIn();
        \$(\"#compteOpt1\").css(\"display\",\"block\");
        \$(\"#compteOpt2\").fadeIn();
        \$(\"#compteOpt2\").css(\"display\",\"block\");
        
      });


  function goPage (newURL) {
      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != \"\") {
      
          // if url is \"-\", it is this page -- reset the menu:
          if (newURL == \"-\" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}

});
</script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\Admin\\Desktop\\OTTOCar-Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
