<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e6bc53797424cb4c33523cbf9d59e6b1590779c78951d665d0e9ec98fc5afd4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cb15d0d6c7959d3cb20de67528d0bf66d9cb09922e9622da23eebfb830271d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb15d0d6c7959d3cb20de67528d0bf66d9cb09922e9622da23eebfb830271d0->enter($__internal_4cb15d0d6c7959d3cb20de67528d0bf66d9cb09922e9622da23eebfb830271d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_531fb53fa3132635e9fec090eaafa23e92d00ea39ebcfb29cbb259715d8bb7c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531fb53fa3132635e9fec090eaafa23e92d00ea39ebcfb29cbb259715d8bb7c6->enter($__internal_531fb53fa3132635e9fec090eaafa23e92d00ea39ebcfb29cbb259715d8bb7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4cb15d0d6c7959d3cb20de67528d0bf66d9cb09922e9622da23eebfb830271d0->leave($__internal_4cb15d0d6c7959d3cb20de67528d0bf66d9cb09922e9622da23eebfb830271d0_prof);

        
        $__internal_531fb53fa3132635e9fec090eaafa23e92d00ea39ebcfb29cbb259715d8bb7c6->leave($__internal_531fb53fa3132635e9fec090eaafa23e92d00ea39ebcfb29cbb259715d8bb7c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
