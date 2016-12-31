<?php

/* compte/index-manager.html.twig */
class __TwigTemplate_0e8fd515be33ca7b206302fdf140665d7d9f054aa9a24b05a695efe2c73d4a20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/index-manager.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6ac31ebc362a5e2361b97bfcbf1e856ef9cbae335ff913c95c6414f6d76bc91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ac31ebc362a5e2361b97bfcbf1e856ef9cbae335ff913c95c6414f6d76bc91->enter($__internal_b6ac31ebc362a5e2361b97bfcbf1e856ef9cbae335ff913c95c6414f6d76bc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/index-manager.html.twig"));

        $__internal_0da806caff9e06702ddf9a433ee716e128ea532e5a3e47bf1976851afd59eab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da806caff9e06702ddf9a433ee716e128ea532e5a3e47bf1976851afd59eab9->enter($__internal_0da806caff9e06702ddf9a433ee716e128ea532e5a3e47bf1976851afd59eab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/index-manager.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6ac31ebc362a5e2361b97bfcbf1e856ef9cbae335ff913c95c6414f6d76bc91->leave($__internal_b6ac31ebc362a5e2361b97bfcbf1e856ef9cbae335ff913c95c6414f6d76bc91_prof);

        
        $__internal_0da806caff9e06702ddf9a433ee716e128ea532e5a3e47bf1976851afd59eab9->leave($__internal_0da806caff9e06702ddf9a433ee716e128ea532e5a3e47bf1976851afd59eab9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0eb95bd05055f182c43f736c11735a0d40e1721dc1db4b51a72c4825167f716a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb95bd05055f182c43f736c11735a0d40e1721dc1db4b51a72c4825167f716a->enter($__internal_0eb95bd05055f182c43f736c11735a0d40e1721dc1db4b51a72c4825167f716a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7d2153e9973e889774ced8cbe96347a2e8fef5d212a86b408232aa4cdfce73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d2153e9973e889774ced8cbe96347a2e8fef5d212a86b408232aa4cdfce73a->enter($__internal_f7d2153e9973e889774ced8cbe96347a2e8fef5d212a86b408232aa4cdfce73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h1> WARNING !</h1>
            </div>
            <div class=\"modal-body\">
                <h3>Are you sure you want to delete this Account ?</h3>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Yes</button>
                <a data-dismiss=\"modal\" class=\"btn btn-default btn-ok\">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!--End Of Modal -->


  <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-id-card-o\"></i></span>
            <h5>All Accounts</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                <th>C.I.N</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Phone</th>
                  <th>Adress</th>
                  <th>Email Adress</th>
                  <th>Car Brand</th>
                  <th>Car Version</th>
                  <th>Plate License</th>
                  <th>Manage</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comptes"]) ? $context["comptes"] : $this->getContext($context, "comptes")));
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 47
            echo "            <tr>
                 <td> ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "cinprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "prenomprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "nomprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "telprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "adresseprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "mailprop", array()), "html", null, true);
            echo "</td>
                <td>  ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "modelevoit", array()), "html", null, true);
            echo " </td>
                <td>  ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "marquevoit", array()), "html", null, true);
            echo " </td>
                <td>  ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "immatvoit", array()), "html", null, true);
            echo "</td>
             <td>
                <a class=\"btn btn-warning\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_edit", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                <button class=\"btn btn-danger\" data-href=\"/delete.php?id=54\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
                Delete </button>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
            </table>
          </div>
    </div>
";
        
        $__internal_f7d2153e9973e889774ced8cbe96347a2e8fef5d212a86b408232aa4cdfce73a->leave($__internal_f7d2153e9973e889774ced8cbe96347a2e8fef5d212a86b408232aa4cdfce73a_prof);

        
        $__internal_0eb95bd05055f182c43f736c11735a0d40e1721dc1db4b51a72c4825167f716a->leave($__internal_0eb95bd05055f182c43f736c11735a0d40e1721dc1db4b51a72c4825167f716a_prof);

    }

    public function getTemplateName()
    {
        return "compte/index-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 64,  140 => 58,  135 => 56,  131 => 55,  127 => 54,  123 => 53,  119 => 52,  115 => 51,  111 => 50,  107 => 49,  103 => 48,  100 => 47,  96 => 46,  74 => 27,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<!-- Modal -->
<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h1> WARNING !</h1>
            </div>
            <div class=\"modal-body\">
                <h3>Are you sure you want to delete this Account ?</h3>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Yes</button>
                <a data-dismiss=\"modal\" class=\"btn btn-default btn-ok\">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!--End Of Modal -->


  <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-id-card-o\"></i></span>
            <h5>All Accounts</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"{{ path('compte_new') }}\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                <th>C.I.N</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Phone</th>
                  <th>Adress</th>
                  <th>Email Adress</th>
                  <th>Car Brand</th>
                  <th>Car Version</th>
                  <th>Plate License</th>
                  <th>Manage</th>
            </tr>
        </thead>
        <tbody>
        {% for compte in comptes %}
            <tr>
                 <td> {{ compte.cinprop }} </td>
                <td> {{ compte.prenomprop }} </td>
                <td> {{ compte.nomprop }} </td>
                <td> {{ compte.telprop }} </td>
                <td> {{ compte.adresseprop }} </td>
                <td> {{ compte.mailprop }}</td>
                <td>  {{ compte.modelevoit }} </td>
                <td>  {{ compte.marquevoit }} </td>
                <td>  {{ compte.immatvoit }}</td>
             <td>
                <a class=\"btn btn-warning\" href=\"{{ path('compte_edit', { 'id': compte.id }) }}\">Edit</a>
                <button class=\"btn btn-danger\" data-href=\"/delete.php?id=54\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
                Delete </button>
                </td>
            </tr>
        {% endfor %}
        </tbody>
            </table>
          </div>
    </div>
{% endblock %}
", "compte/index-manager.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\app\\Resources\\views\\compte\\index-manager.html.twig");
    }
}
