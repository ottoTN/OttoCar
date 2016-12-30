<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f9f69d9de79cd47389bac8ceed0443559cafb2b5b4ac4b707b64beb384bbf78c extends Twig_Template
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
        $__internal_2bef4a0403a4a0b89db06087fe1edf8e8bb474c343a914677d38b93fa6d196bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bef4a0403a4a0b89db06087fe1edf8e8bb474c343a914677d38b93fa6d196bb->enter($__internal_2bef4a0403a4a0b89db06087fe1edf8e8bb474c343a914677d38b93fa6d196bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e5ea5cc175f0aeecfaacbdbd4083c0019bdd15671468afcd47df576e94d58304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ea5cc175f0aeecfaacbdbd4083c0019bdd15671468afcd47df576e94d58304->enter($__internal_e5ea5cc175f0aeecfaacbdbd4083c0019bdd15671468afcd47df576e94d58304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2bef4a0403a4a0b89db06087fe1edf8e8bb474c343a914677d38b93fa6d196bb->leave($__internal_2bef4a0403a4a0b89db06087fe1edf8e8bb474c343a914677d38b93fa6d196bb_prof);

        
        $__internal_e5ea5cc175f0aeecfaacbdbd4083c0019bdd15671468afcd47df576e94d58304->leave($__internal_e5ea5cc175f0aeecfaacbdbd4083c0019bdd15671468afcd47df576e94d58304_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
