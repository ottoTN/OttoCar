<?php

/* fournisseur/index.html.twig */
class __TwigTemplate_d3f4d486398b46be8c0fb8c189db2cc837c5d4eff3bd676e9075cbbc9230e083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/index.html.twig", 1);
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
        $__internal_93aa8c94fcca384ad26b82eec10722c54b2e976c4b430b545c3b4aa2b121b78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93aa8c94fcca384ad26b82eec10722c54b2e976c4b430b545c3b4aa2b121b78d->enter($__internal_93aa8c94fcca384ad26b82eec10722c54b2e976c4b430b545c3b4aa2b121b78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $__internal_7789c9aec2ee1bc8f9a381d3446163cb2db1b58297da7fa5a191726845ce34c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7789c9aec2ee1bc8f9a381d3446163cb2db1b58297da7fa5a191726845ce34c9->enter($__internal_7789c9aec2ee1bc8f9a381d3446163cb2db1b58297da7fa5a191726845ce34c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93aa8c94fcca384ad26b82eec10722c54b2e976c4b430b545c3b4aa2b121b78d->leave($__internal_93aa8c94fcca384ad26b82eec10722c54b2e976c4b430b545c3b4aa2b121b78d_prof);

        
        $__internal_7789c9aec2ee1bc8f9a381d3446163cb2db1b58297da7fa5a191726845ce34c9->leave($__internal_7789c9aec2ee1bc8f9a381d3446163cb2db1b58297da7fa5a191726845ce34c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cc43fed8c8d5cdaf6940fb72f9c0a411d26125df1d05f1ad3ca1e5ea9f1ae2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc43fed8c8d5cdaf6940fb72f9c0a411d26125df1d05f1ad3ca1e5ea9f1ae2a->enter($__internal_6cc43fed8c8d5cdaf6940fb72f9c0a411d26125df1d05f1ad3ca1e5ea9f1ae2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f75de4e77988cc6923efc5ae72d6cea1da2baf037995826e45fdbad929f47cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f75de4e77988cc6923efc5ae72d6cea1da2baf037995826e45fdbad929f47cd->enter($__internal_1f75de4e77988cc6923efc5ae72d6cea1da2baf037995826e45fdbad929f47cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1f75de4e77988cc6923efc5ae72d6cea1da2baf037995826e45fdbad929f47cd->leave($__internal_1f75de4e77988cc6923efc5ae72d6cea1da2baf037995826e45fdbad929f47cd_prof);

        
        $__internal_6cc43fed8c8d5cdaf6940fb72f9c0a411d26125df1d05f1ad3ca1e5ea9f1ae2a->leave($__internal_6cc43fed8c8d5cdaf6940fb72f9c0a411d26125df1d05f1ad3ca1e5ea9f1ae2a_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/index.html.twig";
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
", "fournisseur/index.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\app\\Resources\\views\\fournisseur\\index.html.twig");
    }
}
