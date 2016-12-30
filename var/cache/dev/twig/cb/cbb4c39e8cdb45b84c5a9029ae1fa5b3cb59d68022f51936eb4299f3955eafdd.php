<?php

/* compte/index.html.twig */
class __TwigTemplate_7bbeebcef92776195ef61a32554e7af8b36428253f41c5a9875e38b118d15074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/index.html.twig", 1);
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
        $__internal_2f891367b867ebed628d97f88a5bde8941af9f3114fe4824cd66716b346dff06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f891367b867ebed628d97f88a5bde8941af9f3114fe4824cd66716b346dff06->enter($__internal_2f891367b867ebed628d97f88a5bde8941af9f3114fe4824cd66716b346dff06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/index.html.twig"));

        $__internal_52f769280dcf38616d6356be3f18d5981810553e2a0d517b6c674bbc36b7eee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f769280dcf38616d6356be3f18d5981810553e2a0d517b6c674bbc36b7eee5->enter($__internal_52f769280dcf38616d6356be3f18d5981810553e2a0d517b6c674bbc36b7eee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f891367b867ebed628d97f88a5bde8941af9f3114fe4824cd66716b346dff06->leave($__internal_2f891367b867ebed628d97f88a5bde8941af9f3114fe4824cd66716b346dff06_prof);

        
        $__internal_52f769280dcf38616d6356be3f18d5981810553e2a0d517b6c674bbc36b7eee5->leave($__internal_52f769280dcf38616d6356be3f18d5981810553e2a0d517b6c674bbc36b7eee5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_324fd098dda65886522d84fcb0efdff851e9de6b203097a3ab1910391e612c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_324fd098dda65886522d84fcb0efdff851e9de6b203097a3ab1910391e612c69->enter($__internal_324fd098dda65886522d84fcb0efdff851e9de6b203097a3ab1910391e612c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1cffb9b3ab6271f9256a5dab1cd43b322d45070978e6afb9da7c0c0feef8729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1cffb9b3ab6271f9256a5dab1cd43b322d45070978e6afb9da7c0c0feef8729->enter($__internal_f1cffb9b3ab6271f9256a5dab1cd43b322d45070978e6afb9da7c0c0feef8729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

  <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-id-card-o\"></i></span>
            <h5>All Accounts</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordere data-table\">
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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comptes"]) ? $context["comptes"] : $this->getContext($context, "comptes")));
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 29
            echo "            <tr>
                 <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "cinprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "prenomprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "nomprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "telprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "adresseprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "mailprop", array()), "html", null, true);
            echo "</td>
                <td>  ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "modelevoit", array()), "html", null, true);
            echo " </td>
                <td>  ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "marquevoit", array()), "html", null, true);
            echo " </td>
                <td>  ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "immatvoit", array()), "html", null, true);
            echo "</td>
                <td>
                <a class=\"btn btn-warning\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_show", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                    <!-- <ul>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_show", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_edit", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul> -->
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
            </table>
          </div>
    </div>
";
        
        $__internal_f1cffb9b3ab6271f9256a5dab1cd43b322d45070978e6afb9da7c0c0feef8729->leave($__internal_f1cffb9b3ab6271f9256a5dab1cd43b322d45070978e6afb9da7c0c0feef8729_prof);

        
        $__internal_324fd098dda65886522d84fcb0efdff851e9de6b203097a3ab1910391e612c69->leave($__internal_324fd098dda65886522d84fcb0efdff851e9de6b203097a3ab1910391e612c69_prof);

    }

    public function getTemplateName()
    {
        return "compte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 52,  134 => 46,  128 => 43,  122 => 40,  117 => 38,  113 => 37,  109 => 36,  105 => 35,  101 => 34,  97 => 33,  93 => 32,  89 => 31,  85 => 30,  82 => 29,  78 => 28,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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


  <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-id-card-o\"></i></span>
            <h5>All Accounts</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"{{ path('compte_new') }}\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordere data-table\">
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
                <a class=\"btn btn-warning\" href=\"{{ path('compte_show', { 'id': compte.id }) }}\">Edit</a>
                    <!-- <ul>
                        <li>
                            <a href=\"{{ path('compte_show', { 'id': compte.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('compte_edit', { 'id': compte.id }) }}\">edit</a>
                        </li>
                    </ul> -->
                </td>
            </tr>
        {% endfor %}
        </tbody>
            </table>
          </div>
    </div>
{% endblock %}
", "compte/index.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\compte\\index.html.twig");
    }
}
