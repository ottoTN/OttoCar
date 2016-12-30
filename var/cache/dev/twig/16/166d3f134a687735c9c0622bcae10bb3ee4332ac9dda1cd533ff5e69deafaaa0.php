<?php

/* fournisseur/show.html.twig */
class __TwigTemplate_9fa68b0b18109c3d588af28835f631fd8a730af866c89fd030f6d4f3afaf19e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/show.html.twig", 1);
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
        $__internal_a59f47ecd82afecb09e62417c18e91e3d614e2d4359116fbe6ac2286ade5ded3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59f47ecd82afecb09e62417c18e91e3d614e2d4359116fbe6ac2286ade5ded3->enter($__internal_a59f47ecd82afecb09e62417c18e91e3d614e2d4359116fbe6ac2286ade5ded3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/show.html.twig"));

        $__internal_eb118588a904b33539713b0d16a6a964f18b283f99363292ba5bac11ec6adf02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb118588a904b33539713b0d16a6a964f18b283f99363292ba5bac11ec6adf02->enter($__internal_eb118588a904b33539713b0d16a6a964f18b283f99363292ba5bac11ec6adf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a59f47ecd82afecb09e62417c18e91e3d614e2d4359116fbe6ac2286ade5ded3->leave($__internal_a59f47ecd82afecb09e62417c18e91e3d614e2d4359116fbe6ac2286ade5ded3_prof);

        
        $__internal_eb118588a904b33539713b0d16a6a964f18b283f99363292ba5bac11ec6adf02->leave($__internal_eb118588a904b33539713b0d16a6a964f18b283f99363292ba5bac11ec6adf02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa83b053301b09c2be4e6ca3b4b13371579afbc9426f8b5f18e322ab83c73f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa83b053301b09c2be4e6ca3b4b13371579afbc9426f8b5f18e322ab83c73f26->enter($__internal_fa83b053301b09c2be4e6ca3b4b13371579afbc9426f8b5f18e322ab83c73f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_355933c0ba238ebc68cc8d6490025cafb70b38a0831b795c74f0b0ae26f902b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355933c0ba238ebc68cc8d6490025cafb70b38a0831b795c74f0b0ae26f902b3->enter($__internal_355933c0ba238ebc68cc8d6490025cafb70b38a0831b795c74f0b0ae26f902b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fournisseur</h1>

    <table>
        <tbody>
            <tr>
                <th>Nomfourn</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fournisseur"]) ? $context["fournisseur"] : $this->getContext($context, "fournisseur")), "nomfourn", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adressefourn</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fournisseur"]) ? $context["fournisseur"] : $this->getContext($context, "fournisseur")), "adressefourn", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mailfourn</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fournisseur"]) ? $context["fournisseur"] : $this->getContext($context, "fournisseur")), "mailfourn", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telfourn</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fournisseur"]) ? $context["fournisseur"] : $this->getContext($context, "fournisseur")), "telfourn", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fournisseur"]) ? $context["fournisseur"] : $this->getContext($context, "fournisseur")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_edit", array("id" => $this->getAttribute((isset($context["fournisseur"]) ? $context["fournisseur"] : $this->getContext($context, "fournisseur")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_355933c0ba238ebc68cc8d6490025cafb70b38a0831b795c74f0b0ae26f902b3->leave($__internal_355933c0ba238ebc68cc8d6490025cafb70b38a0831b795c74f0b0ae26f902b3_prof);

        
        $__internal_fa83b053301b09c2be4e6ca3b4b13371579afbc9426f8b5f18e322ab83c73f26->leave($__internal_fa83b053301b09c2be4e6ca3b4b13371579afbc9426f8b5f18e322ab83c73f26_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  107 => 39,  101 => 36,  95 => 33,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Fournisseur</h1>

    <table>
        <tbody>
            <tr>
                <th>Nomfourn</th>
                <td>{{ fournisseur.nomfourn }}</td>
            </tr>
            <tr>
                <th>Adressefourn</th>
                <td>{{ fournisseur.adressefourn }}</td>
            </tr>
            <tr>
                <th>Mailfourn</th>
                <td>{{ fournisseur.mailfourn }}</td>
            </tr>
            <tr>
                <th>Telfourn</th>
                <td>{{ fournisseur.telfourn }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ fournisseur.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fournisseur_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('fournisseur_edit', { 'id': fournisseur.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "fournisseur/show.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\app\\Resources\\views\\fournisseur\\show.html.twig");
    }
}
