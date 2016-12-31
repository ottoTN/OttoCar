<?php

/* fournisseur/index-manager.html.twig */
class __TwigTemplate_008d0d9bfcebc64643eed87713ee03a74a45d9f163e23f150fa6f872b06f0cca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/index-manager.html.twig", 1);
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
        $__internal_0da69aae349f7666cc6aa857562164c6e2444af9afe8ce8963379db5473abe38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da69aae349f7666cc6aa857562164c6e2444af9afe8ce8963379db5473abe38->enter($__internal_0da69aae349f7666cc6aa857562164c6e2444af9afe8ce8963379db5473abe38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/index-manager.html.twig"));

        $__internal_c50413d1908665a2014a7ad509b26b386262e3667410af3faf06eb0c1b943fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50413d1908665a2014a7ad509b26b386262e3667410af3faf06eb0c1b943fe1->enter($__internal_c50413d1908665a2014a7ad509b26b386262e3667410af3faf06eb0c1b943fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/index-manager.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0da69aae349f7666cc6aa857562164c6e2444af9afe8ce8963379db5473abe38->leave($__internal_0da69aae349f7666cc6aa857562164c6e2444af9afe8ce8963379db5473abe38_prof);

        
        $__internal_c50413d1908665a2014a7ad509b26b386262e3667410af3faf06eb0c1b943fe1->leave($__internal_c50413d1908665a2014a7ad509b26b386262e3667410af3faf06eb0c1b943fe1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_81ec72dcc31b8bcea7ff16a49d8e88959c6094d7f4d64b0f3a0371ac9fd4a84b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ec72dcc31b8bcea7ff16a49d8e88959c6094d7f4d64b0f3a0371ac9fd4a84b->enter($__internal_81ec72dcc31b8bcea7ff16a49d8e88959c6094d7f4d64b0f3a0371ac9fd4a84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1cd4a71d431e820dcebec1dfa926ccd6ce855940d9c38dc046455cf6ff4eaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cd4a71d431e820dcebec1dfa926ccd6ce855940d9c38dc046455cf6ff4eaae->enter($__internal_d1cd4a71d431e820dcebec1dfa926ccd6ce855940d9c38dc046455cf6ff4eaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h1> WARNING !</h1>
            </div>
            <div class=\"modal-body\">
                <h3>Are you sure you want to delete this Provider ?</h3>
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
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-handshake-o\"></i></span>
            <h5>All Providers</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                <th>Nomfourn</th>
                <th>Adressefourn</th>
                <th>Mailfourn</th>
                <th>Telfourn</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fournisseurs"]) ? $context["fournisseurs"] : $this->getContext($context, "fournisseurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "nomfourn", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "adressefourn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "mailfourn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "telfourn", array()), "html", null, true);
            echo "</td>
                <td>
                            <a class=\"btn btn-warning\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_edit", array("id" => $this->getAttribute($context["fournisseur"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                            <!-- <button type=\"button\" data-href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_edit", array("id" => $this->getAttribute($context["fournisseur"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-warning\"> Edit </button>  -->
                            <button class=\"btn btn-danger\" data-href=\"/delete.php?id=54\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
                Delete 
                </button>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
            </table>
          </div>
    </div>

";
        
        $__internal_d1cd4a71d431e820dcebec1dfa926ccd6ce855940d9c38dc046455cf6ff4eaae->leave($__internal_d1cd4a71d431e820dcebec1dfa926ccd6ce855940d9c38dc046455cf6ff4eaae_prof);

        
        $__internal_81ec72dcc31b8bcea7ff16a49d8e88959c6094d7f4d64b0f3a0371ac9fd4a84b->leave($__internal_81ec72dcc31b8bcea7ff16a49d8e88959c6094d7f4d64b0f3a0371ac9fd4a84b_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/index-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 55,  118 => 48,  114 => 47,  109 => 45,  105 => 44,  101 => 43,  97 => 42,  94 => 41,  90 => 40,  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
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
                <h3>Are you sure you want to delete this Provider ?</h3>
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
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-handshake-o\"></i></span>
            <h5>All Providers</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"{{ path('fournisseur_new') }}\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                <th>Nomfourn</th>
                <th>Adressefourn</th>
                <th>Mailfourn</th>
                <th>Telfourn</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fournisseur in fournisseurs %}
            <tr>
                <td>{{ fournisseur.nomfourn }}</a></td>
                <td>{{ fournisseur.adressefourn }}</td>
                <td>{{ fournisseur.mailfourn }}</td>
                <td>{{ fournisseur.telfourn }}</td>
                <td>
                            <a class=\"btn btn-warning\" href=\"{{ path('fournisseur_edit', { 'id': fournisseur.id }) }}\">Edit</a>
                            <!-- <button type=\"button\" data-href=\"{{ path('fournisseur_edit', { 'id': fournisseur.id }) }}\"class=\"btn btn-warning\"> Edit </button>  -->
                            <button class=\"btn btn-danger\" data-href=\"/delete.php?id=54\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
                Delete 
                </button>
                </td>
            </tr>
        {% endfor %}
        </tbody>
            </table>
          </div>
    </div>

{% endblock %}
", "fournisseur/index-manager.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\app\\Resources\\views\\fournisseur\\index-manager.html.twig");
    }
}
