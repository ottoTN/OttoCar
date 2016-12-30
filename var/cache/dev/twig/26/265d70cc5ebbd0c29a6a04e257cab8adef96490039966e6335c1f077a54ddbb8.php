<?php

/* fournisseur/show.html.twig */
class __TwigTemplate_0d45ddd3d58dafc679aef2fc03b924b2e690e84d71116c9c06c48dbf1369f991 extends Twig_Template
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
        $__internal_8deb59916868038c657c38cb04d95454e679bd4ce7b9ec3d5439657283bef2c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8deb59916868038c657c38cb04d95454e679bd4ce7b9ec3d5439657283bef2c9->enter($__internal_8deb59916868038c657c38cb04d95454e679bd4ce7b9ec3d5439657283bef2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/show.html.twig"));

        $__internal_1e07cf5c01a0c3b5f46f92bedf759fdc4274b6d0c00ffe86f719f01ddfb2b4ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e07cf5c01a0c3b5f46f92bedf759fdc4274b6d0c00ffe86f719f01ddfb2b4ec->enter($__internal_1e07cf5c01a0c3b5f46f92bedf759fdc4274b6d0c00ffe86f719f01ddfb2b4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8deb59916868038c657c38cb04d95454e679bd4ce7b9ec3d5439657283bef2c9->leave($__internal_8deb59916868038c657c38cb04d95454e679bd4ce7b9ec3d5439657283bef2c9_prof);

        
        $__internal_1e07cf5c01a0c3b5f46f92bedf759fdc4274b6d0c00ffe86f719f01ddfb2b4ec->leave($__internal_1e07cf5c01a0c3b5f46f92bedf759fdc4274b6d0c00ffe86f719f01ddfb2b4ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a5b3b1351817b7cf31c80c3f9044cb9f0e3f05a9c0a532df12c5c2950eaeb3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5b3b1351817b7cf31c80c3f9044cb9f0e3f05a9c0a532df12c5c2950eaeb3b->enter($__internal_7a5b3b1351817b7cf31c80c3f9044cb9f0e3f05a9c0a532df12c5c2950eaeb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1924d5f7f4c52b70eda62ef71ce394f221cdd69e028a2bfa85d24ac4d28e50ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1924d5f7f4c52b70eda62ef71ce394f221cdd69e028a2bfa85d24ac4d28e50ec->enter($__internal_1924d5f7f4c52b70eda62ef71ce394f221cdd69e028a2bfa85d24ac4d28e50ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1924d5f7f4c52b70eda62ef71ce394f221cdd69e028a2bfa85d24ac4d28e50ec->leave($__internal_1924d5f7f4c52b70eda62ef71ce394f221cdd69e028a2bfa85d24ac4d28e50ec_prof);

        
        $__internal_7a5b3b1351817b7cf31c80c3f9044cb9f0e3f05a9c0a532df12c5c2950eaeb3b->leave($__internal_7a5b3b1351817b7cf31c80c3f9044cb9f0e3f05a9c0a532df12c5c2950eaeb3b_prof);

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
", "fournisseur/show.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\fournisseur\\show.html.twig");
    }
}
