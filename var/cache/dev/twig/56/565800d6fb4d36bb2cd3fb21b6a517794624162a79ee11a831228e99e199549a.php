<?php

/* fournisseur/show.html.twig */
class __TwigTemplate_3d05be150c877a4f5a6661434f69d8ccbbf715af77dbbdaa148a7679df5a3555 extends Twig_Template
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
        $__internal_fc4ecdac836d1dfdbb3b004c6ac5279defb2301ef2daa12b90adedd75c1bb308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4ecdac836d1dfdbb3b004c6ac5279defb2301ef2daa12b90adedd75c1bb308->enter($__internal_fc4ecdac836d1dfdbb3b004c6ac5279defb2301ef2daa12b90adedd75c1bb308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/show.html.twig"));

        $__internal_f5229eb331a0278e77e3dc7dbd361c39d37f7e7a0515b6b06d2402a54e12f9a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5229eb331a0278e77e3dc7dbd361c39d37f7e7a0515b6b06d2402a54e12f9a9->enter($__internal_f5229eb331a0278e77e3dc7dbd361c39d37f7e7a0515b6b06d2402a54e12f9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc4ecdac836d1dfdbb3b004c6ac5279defb2301ef2daa12b90adedd75c1bb308->leave($__internal_fc4ecdac836d1dfdbb3b004c6ac5279defb2301ef2daa12b90adedd75c1bb308_prof);

        
        $__internal_f5229eb331a0278e77e3dc7dbd361c39d37f7e7a0515b6b06d2402a54e12f9a9->leave($__internal_f5229eb331a0278e77e3dc7dbd361c39d37f7e7a0515b6b06d2402a54e12f9a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d89ec50bf88e51974ce0d730eefe4a06c22deb15adfaddf945e4ded00b7bc6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89ec50bf88e51974ce0d730eefe4a06c22deb15adfaddf945e4ded00b7bc6b1->enter($__internal_d89ec50bf88e51974ce0d730eefe4a06c22deb15adfaddf945e4ded00b7bc6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63da2453b8212f6399b29f00cc7b138bd1c8ec9b9f88768f2f62e607075fd540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63da2453b8212f6399b29f00cc7b138bd1c8ec9b9f88768f2f62e607075fd540->enter($__internal_63da2453b8212f6399b29f00cc7b138bd1c8ec9b9f88768f2f62e607075fd540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_63da2453b8212f6399b29f00cc7b138bd1c8ec9b9f88768f2f62e607075fd540->leave($__internal_63da2453b8212f6399b29f00cc7b138bd1c8ec9b9f88768f2f62e607075fd540_prof);

        
        $__internal_d89ec50bf88e51974ce0d730eefe4a06c22deb15adfaddf945e4ded00b7bc6b1->leave($__internal_d89ec50bf88e51974ce0d730eefe4a06c22deb15adfaddf945e4ded00b7bc6b1_prof);

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
", "fournisseur/show.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\fournisseur\\show.html.twig");
    }
}
