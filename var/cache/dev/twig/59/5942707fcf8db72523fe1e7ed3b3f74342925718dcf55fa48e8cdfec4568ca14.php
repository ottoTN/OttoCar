<?php

/* base.html.twig */
class __TwigTemplate_65e9a3ecb2f515ef2493bbc2031d6208bf1a9579880dd3fe6e3ba4b115c1b940 extends Twig_Template
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
        $__internal_bfb663ab7b3c563f3874881e2d1f865ed87df7e0b3c66b6aba08f28e2f01d2a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb663ab7b3c563f3874881e2d1f865ed87df7e0b3c66b6aba08f28e2f01d2a0->enter($__internal_bfb663ab7b3c563f3874881e2d1f865ed87df7e0b3c66b6aba08f28e2f01d2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2d24322b8fbb79869ed3cc3971afdb9bbfa225a7f3b97ec506c616bfdb794388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d24322b8fbb79869ed3cc3971afdb9bbfa225a7f3b97ec506c616bfdb794388->enter($__internal_2d24322b8fbb79869ed3cc3971afdb9bbfa225a7f3b97ec506c616bfdb794388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-toggle.min.css"), "html", null, true);
        echo "\"/>

 <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
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
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "    
   
</div>
<!--Footer-part-->
<hr/>
<div class=\"row-fluid\">
  <div id=\"footer\" class=\"span12\"> 2017 &copy; OttoCar. Brought to you by <a href=\"#\">Otto & Devixx</a> </div>
</div>
<!--end-Footer-part-->

<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.uniform.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/matrix.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/matrix.tables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/masked.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-toggle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/matrix.form_common.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/matrix.form_validation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/cars.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
  \$('#payInvoice').click(function (){
    \$('#invoiceStatus1').empty();
    \$( \"#invoiceStatus1\" ).append( '<div class=\"toggle btn btn-default on\" data-toggle=\"toggle\" disabled=\"disabled\" style=\"width: 50px; height: 25px;\"><input type=\"checkbox\" checked disabled=\"\" data-toggle=\"toggle\" data-on=\"Paid\" data-off=\"Unpaid\" data-onstyle=\"success\" data-width=\"50\" data-height=\"25\"><div class=\"toggle-group\"><label class=\"btn btn-success toggle-on\" style=\"line-height: 34px;\">Paid</label><label class=\"btn btn-default active toggle-off\" style=\"line-height: 34px;\">Unpaid</label><span class=\"toggle-handle btn btn-default\"></span></div></div>' );
    
    \$('#payInvoice').attr(\"disabled\",\"disabled\");
    \$('#payInvoice').html(\"Paid\");
    \$('#cost').html('70,00 TND');
    \$('#addFacture').modal('hide');

  });
</script>
<script type=\"text/javascript\">
\$(\"#garagebundle_compte_immatvoit\").mask(\"999 TUN 9999\");
    \$select = \$('#cars');
    \$versions = \$('#versions');
    \$selectedCar = \$('#garagebundle_compte_modelevoit');
    \$selectedVer = \$('#garagebundle_compte_marquevoit');
    \$select.html('');
            //iterate over the data and append a select option
            var carsJSON = JSON.parse(cars);
            /*console.log(carsJSON);*/
            \$.each(carsJSON.car, function(key, val){
              \$select.append('<option id=\"' + val.value + '\">' + val.title + '</option>');
            });

     \$select.click(function(){

      \$versions.html('');
      var carName = \$select.find(\":selected\").text();
      \$selectedCar.val(carName);
      \$.each(carsJSON.car, function(key, val){
        if(carName == val.title){
          \$.each(val.models, function(key, val){
          \$versions.append('<option id=\"' + val.value + '\">' + val.title + '</option>');
            });
          }
    });
});
\$versions.click(function(){
        var carVer = \$versions.find(\":selected\").text();
        \$selectedVer.val(carVer);

});


\$('#editCurrentClient').on('show.bs.modal', function (event) {
  var button = \$(event.relatedTarget) // Button that triggered the modal
  var id= button.data('client-id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = \$(this)
  modal.find('.modal-title').text('The ID is: ' + id)
  modal.find('.modal-body #id-client').val(id)

</script>
</script>
";
        // line 180
        $this->displayBlock('javascripts', $context, $blocks);
        // line 181
        echo "</body>
</html>
";
        
        $__internal_bfb663ab7b3c563f3874881e2d1f865ed87df7e0b3c66b6aba08f28e2f01d2a0->leave($__internal_bfb663ab7b3c563f3874881e2d1f865ed87df7e0b3c66b6aba08f28e2f01d2a0_prof);

        
        $__internal_2d24322b8fbb79869ed3cc3971afdb9bbfa225a7f3b97ec506c616bfdb794388->leave($__internal_2d24322b8fbb79869ed3cc3971afdb9bbfa225a7f3b97ec506c616bfdb794388_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_9359b1308e62ef1d0be278cfd15f3b2eff41878dc5ad78391a8b9f15a38c1eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9359b1308e62ef1d0be278cfd15f3b2eff41878dc5ad78391a8b9f15a38c1eb4->enter($__internal_9359b1308e62ef1d0be278cfd15f3b2eff41878dc5ad78391a8b9f15a38c1eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08c304de2924d4482d94015f1c74f2c6c03186c9350abc277c8a7459a231af9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c304de2924d4482d94015f1c74f2c6c03186c9350abc277c8a7459a231af9d->enter($__internal_08c304de2924d4482d94015f1c74f2c6c03186c9350abc277c8a7459a231af9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OttoCar!";
        
        $__internal_08c304de2924d4482d94015f1c74f2c6c03186c9350abc277c8a7459a231af9d->leave($__internal_08c304de2924d4482d94015f1c74f2c6c03186c9350abc277c8a7459a231af9d_prof);

        
        $__internal_9359b1308e62ef1d0be278cfd15f3b2eff41878dc5ad78391a8b9f15a38c1eb4->leave($__internal_9359b1308e62ef1d0be278cfd15f3b2eff41878dc5ad78391a8b9f15a38c1eb4_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48ef13bb380be7a4abb5cbb457179b80b1cf17641b5095cf457f1f34ffd02d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ef13bb380be7a4abb5cbb457179b80b1cf17641b5095cf457f1f34ffd02d61->enter($__internal_48ef13bb380be7a4abb5cbb457179b80b1cf17641b5095cf457f1f34ffd02d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_78f576e1b781cb1e73f44e15e14b80d2c4a2bdcc06c87a65c09ce7f508c295b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f576e1b781cb1e73f44e15e14b80d2c4a2bdcc06c87a65c09ce7f508c295b9->enter($__internal_78f576e1b781cb1e73f44e15e14b80d2c4a2bdcc06c87a65c09ce7f508c295b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_78f576e1b781cb1e73f44e15e14b80d2c4a2bdcc06c87a65c09ce7f508c295b9->leave($__internal_78f576e1b781cb1e73f44e15e14b80d2c4a2bdcc06c87a65c09ce7f508c295b9_prof);

        
        $__internal_48ef13bb380be7a4abb5cbb457179b80b1cf17641b5095cf457f1f34ffd02d61->leave($__internal_48ef13bb380be7a4abb5cbb457179b80b1cf17641b5095cf457f1f34ffd02d61_prof);

    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        $__internal_674cfc85f26c8aaff527721757f07c303241f28f9c43aaef8cbbd62a7b6edba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674cfc85f26c8aaff527721757f07c303241f28f9c43aaef8cbbd62a7b6edba5->enter($__internal_674cfc85f26c8aaff527721757f07c303241f28f9c43aaef8cbbd62a7b6edba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_837a626f72fbf1feab69789bca6e6562d0da0be7224a4e19471912bfa94a6624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837a626f72fbf1feab69789bca6e6562d0da0be7224a4e19471912bfa94a6624->enter($__internal_837a626f72fbf1feab69789bca6e6562d0da0be7224a4e19471912bfa94a6624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_837a626f72fbf1feab69789bca6e6562d0da0be7224a4e19471912bfa94a6624->leave($__internal_837a626f72fbf1feab69789bca6e6562d0da0be7224a4e19471912bfa94a6624_prof);

        
        $__internal_674cfc85f26c8aaff527721757f07c303241f28f9c43aaef8cbbd62a7b6edba5->leave($__internal_674cfc85f26c8aaff527721757f07c303241f28f9c43aaef8cbbd62a7b6edba5_prof);

    }

    // line 180
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b8b3c40bea5b580449a03bafc8e42d391c1d116b8bb8d8a39c40cca1a79ce32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8b3c40bea5b580449a03bafc8e42d391c1d116b8bb8d8a39c40cca1a79ce32->enter($__internal_5b8b3c40bea5b580449a03bafc8e42d391c1d116b8bb8d8a39c40cca1a79ce32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0038c17af01028630627d352df5e645678766c6c11cdea06d4fb702ec908fef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0038c17af01028630627d352df5e645678766c6c11cdea06d4fb702ec908fef5->enter($__internal_0038c17af01028630627d352df5e645678766c6c11cdea06d4fb702ec908fef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0038c17af01028630627d352df5e645678766c6c11cdea06d4fb702ec908fef5->leave($__internal_0038c17af01028630627d352df5e645678766c6c11cdea06d4fb702ec908fef5_prof);

        
        $__internal_5b8b3c40bea5b580449a03bafc8e42d391c1d116b8bb8d8a39c40cca1a79ce32->leave($__internal_5b8b3c40bea5b580449a03bafc8e42d391c1d116b8bb8d8a39c40cca1a79ce32_prof);

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
        return array (  360 => 180,  343 => 99,  326 => 21,  308 => 20,  296 => 181,  294 => 180,  233 => 122,  229 => 121,  225 => 120,  221 => 119,  217 => 118,  213 => 117,  209 => 116,  205 => 115,  201 => 114,  197 => 113,  193 => 112,  189 => 111,  185 => 110,  173 => 100,  171 => 99,  92 => 22,  90 => 21,  86 => 20,  81 => 18,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  29 => 1,);
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
<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-toggle.min.css')}}\"/>

 <title>{% block title %}OttoCar!{% endblock %}</title>
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
  <div id=\"footer\" class=\"span12\"> 2017 &copy; OttoCar. Brought to you by <a href=\"#\">Otto & Devixx</a> </div>
</div>
<!--end-Footer-part-->

<script src=\"{{ asset('js/jquery.min.js')}}\"></script> 
<script src=\"{{ asset('js/bootstrap.min.js')}}\"></script> 
<script src=\"{{ asset('js/jquery.uniform.js')}}\"></script> 
<script src=\"{{ asset('js/select2.min.js')}}\"></script> 
<script src=\"{{ asset('js/jquery.dataTables.min.js')}}\"></script> 
<script src=\"{{ asset('js/matrix.js')}}\"></script> 
<script src=\"{{ asset('js/matrix.tables.js')}}\"></script>
<script src=\"{{ asset('js/masked.js')}}\"></script> 
<script src=\"{{ asset('js/bootstrap-toggle.min.js')}}\"></script>
<script src=\"{{ asset('js/jquery.validate.js')}}\"></script> 
<script src=\"{{ asset('js/matrix.form_common.js')}}\"></script>
<script src=\"{{ asset('js/matrix.form_validation.js')}}\"></script>
<script src=\"{{ asset('js/cars.js')}}\"></script>
<script type=\"text/javascript\">
  \$('#payInvoice').click(function (){
    \$('#invoiceStatus1').empty();
    \$( \"#invoiceStatus1\" ).append( '<div class=\"toggle btn btn-default on\" data-toggle=\"toggle\" disabled=\"disabled\" style=\"width: 50px; height: 25px;\"><input type=\"checkbox\" checked disabled=\"\" data-toggle=\"toggle\" data-on=\"Paid\" data-off=\"Unpaid\" data-onstyle=\"success\" data-width=\"50\" data-height=\"25\"><div class=\"toggle-group\"><label class=\"btn btn-success toggle-on\" style=\"line-height: 34px;\">Paid</label><label class=\"btn btn-default active toggle-off\" style=\"line-height: 34px;\">Unpaid</label><span class=\"toggle-handle btn btn-default\"></span></div></div>' );
    
    \$('#payInvoice').attr(\"disabled\",\"disabled\");
    \$('#payInvoice').html(\"Paid\");
    \$('#cost').html('70,00 TND');
    \$('#addFacture').modal('hide');

  });
</script>
<script type=\"text/javascript\">
\$(\"#garagebundle_compte_immatvoit\").mask(\"999 TUN 9999\");
    \$select = \$('#cars');
    \$versions = \$('#versions');
    \$selectedCar = \$('#garagebundle_compte_modelevoit');
    \$selectedVer = \$('#garagebundle_compte_marquevoit');
    \$select.html('');
            //iterate over the data and append a select option
            var carsJSON = JSON.parse(cars);
            /*console.log(carsJSON);*/
            \$.each(carsJSON.car, function(key, val){
              \$select.append('<option id=\"' + val.value + '\">' + val.title + '</option>');
            });

     \$select.click(function(){

      \$versions.html('');
      var carName = \$select.find(\":selected\").text();
      \$selectedCar.val(carName);
      \$.each(carsJSON.car, function(key, val){
        if(carName == val.title){
          \$.each(val.models, function(key, val){
          \$versions.append('<option id=\"' + val.value + '\">' + val.title + '</option>');
            });
          }
    });
});
\$versions.click(function(){
        var carVer = \$versions.find(\":selected\").text();
        \$selectedVer.val(carVer);

});


\$('#editCurrentClient').on('show.bs.modal', function (event) {
  var button = \$(event.relatedTarget) // Button that triggered the modal
  var id= button.data('client-id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = \$(this)
  modal.find('.modal-title').text('The ID is: ' + id)
  modal.find('.modal-body #id-client').val(id)

</script>
</script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar\\app\\Resources\\views\\base.html.twig");
    }
}
