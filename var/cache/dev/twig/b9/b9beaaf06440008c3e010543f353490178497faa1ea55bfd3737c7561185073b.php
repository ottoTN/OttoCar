<?php

/* piece/show.html.twig */
class __TwigTemplate_d0e7708828c46a8323b32e2051c5c0f3aedfa8ae363dbff4b3548b4899419fe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "piece/show.html.twig", 1);
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
        $__internal_3292dd3175b1a9c9f36fc5fb7fac3a76ac1e328e9fb086717e30448dd9a6ce9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3292dd3175b1a9c9f36fc5fb7fac3a76ac1e328e9fb086717e30448dd9a6ce9c->enter($__internal_3292dd3175b1a9c9f36fc5fb7fac3a76ac1e328e9fb086717e30448dd9a6ce9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/show.html.twig"));

        $__internal_18df2ea977b4b0ed80c231d1d4966f1925113e0827a59813f2650aaf9685d88d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18df2ea977b4b0ed80c231d1d4966f1925113e0827a59813f2650aaf9685d88d->enter($__internal_18df2ea977b4b0ed80c231d1d4966f1925113e0827a59813f2650aaf9685d88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3292dd3175b1a9c9f36fc5fb7fac3a76ac1e328e9fb086717e30448dd9a6ce9c->leave($__internal_3292dd3175b1a9c9f36fc5fb7fac3a76ac1e328e9fb086717e30448dd9a6ce9c_prof);

        
        $__internal_18df2ea977b4b0ed80c231d1d4966f1925113e0827a59813f2650aaf9685d88d->leave($__internal_18df2ea977b4b0ed80c231d1d4966f1925113e0827a59813f2650aaf9685d88d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0c203887e52acefef9baa1a923b656f0bf6226cfd381539aed5711f9847c104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c203887e52acefef9baa1a923b656f0bf6226cfd381539aed5711f9847c104->enter($__internal_a0c203887e52acefef9baa1a923b656f0bf6226cfd381539aed5711f9847c104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d48ef73eb241bb90e841f2f1eee8f1eb9f9d889af2bc964464d7995ed4bba7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48ef73eb241bb90e841f2f1eee8f1eb9f9d889af2bc964464d7995ed4bba7b1->enter($__internal_d48ef73eb241bb90e841f2f1eee8f1eb9f9d889af2bc964464d7995ed4bba7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Piece</h1>

    <table>
        <tbody>
            <tr>
                <th>Refpiece</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["piece"]) ? $context["piece"] : $this->getContext($context, "piece")), "refpiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marquepiece</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["piece"]) ? $context["piece"] : $this->getContext($context, "piece")), "marquepiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prixpiece</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["piece"]) ? $context["piece"] : $this->getContext($context, "piece")), "prixpiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typepiece</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["piece"]) ? $context["piece"] : $this->getContext($context, "piece")), "typepiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Libellepiece</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["piece"]) ? $context["piece"] : $this->getContext($context, "piece")), "libellepiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["piece"]) ? $context["piece"] : $this->getContext($context, "piece")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_edit", array("id" => $this->getAttribute((isset($context["piece"]) ? $context["piece"] : $this->getContext($context, "piece")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d48ef73eb241bb90e841f2f1eee8f1eb9f9d889af2bc964464d7995ed4bba7b1->leave($__internal_d48ef73eb241bb90e841f2f1eee8f1eb9f9d889af2bc964464d7995ed4bba7b1_prof);

        
        $__internal_a0c203887e52acefef9baa1a923b656f0bf6226cfd381539aed5711f9847c104->leave($__internal_a0c203887e52acefef9baa1a923b656f0bf6226cfd381539aed5711f9847c104_prof);

    }

    public function getTemplateName()
    {
        return "piece/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Piece</h1>

    <table>
        <tbody>
            <tr>
                <th>Refpiece</th>
                <td>{{ piece.refpiece }}</td>
            </tr>
            <tr>
                <th>Marquepiece</th>
                <td>{{ piece.marquepiece }}</td>
            </tr>
            <tr>
                <th>Prixpiece</th>
                <td>{{ piece.prixpiece }}</td>
            </tr>
            <tr>
                <th>Typepiece</th>
                <td>{{ piece.typepiece }}</td>
            </tr>
            <tr>
                <th>Libellepiece</th>
                <td>{{ piece.libellepiece }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ piece.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('piece_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('piece_edit', { 'id': piece.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "piece/show.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\piece\\show.html.twig");
    }
}
